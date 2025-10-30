<?php 

namespace App\Services;

use App\Models\Sign;
use Exception;

class SignService {
    public function createSign(): Sign {
        $name = "";
        $position = "";
        $phone = null;
        $whatsapp = false;
        $PGS = false;

        if (!isset($_POST['name']) || !isset($_POST['position'])) {
            throw new Exception('Erro ao criar a assinatura! Campo "nome" e/ou "cargo" não encontrado.');
        }        
        if (isset($_POST['name']) ) {
            $name = $_POST['name'];
        }
        if (isset($_POST['position']) ) {
            $position = $_POST['position'];
        }
        if (isset($_POST['phone']) && strlen($_POST['phone']) > 13) {
            $phone = $_POST['phone'];
        }
        if (isset($_POST['withWhatsapp'])) {
            $whatsapp = true;
        }
        if (isset($_POST['withPGS'])) {
            $PGS = true;
        }

        return new Sign($name, $position, $phone, $whatsapp, $PGS);
    }

    public function renderSign(Sign $sign): string {    
        $whatsapp = "";
        $phone = "";
        $PGS = "";
        $width = 631;

        if ($sign->getPhone() != null) {
            $phone = str_replace(["(", ")"], "", $sign->getPhone());
            $phone = "| $phone";
        }

        if ($sign->getWithWhatsapp()) {
            $whatsappPhone = str_replace([" ", "|", "-"], "", $phone);

            $whatsapp = "<a style=\"text-decoration: none\" href=\"https://wa.me/{$whatsappPhone}\" title=\"Conversar com {$sign->getPhone()}\" target=\"
                _blank\"><img width=\"26\" height=\"26\" style=\"max-width: 688px; margin: 0px\" src=\"https://metaro.com.br/images/icon-wpp.png\"/></a>";
        }
        
        if ($sign->getWithPGS()) {
            $PGS = "<td style=\"padding-right: 8px\"><img height=\"98\" src=\"https://metaro.com.br/images/selo-pgs.png\" alt=\"\"></td>";
            $width = 730;
        }
        
        $args = [
            'name' => $sign->getName(),
            'position' => $sign->getPosition(),
            'phone' => $phone,
            'whatsapp' => $whatsapp,
            'width' => $width,
            'PGS' => $PGS
        ];

        $signContent = file_get_contents("./app/views/templates/sign.html");

        foreach ($args as $key => $value) {
            $signContent = str_replace("{{ $key }}", $value, $signContent);
        }

        return $signContent;
    }
}

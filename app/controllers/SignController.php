<?php 

namespace App\Controllers;

use App\Interfaces\ControllerInterface;
use App\Services\SignService;
use Exception;

final class SignController extends Controller implements ControllerInterface {
    public function exec(): void {
        if (!isset($_POST['go'])) header('Location: index.php');
        
        try {
            $signService = new SignService();
            $sign = $signService->createSign();
            $signContent = $signService->renderSign($sign);

            $this->view->render("sign", ['sign' => $signContent]);
        } catch (Exception $e) {
            echo "Erro ao gerar assinatura!";
            die();
        }
    }
}

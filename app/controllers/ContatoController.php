<?php 

namespace App\Controllers;

use App\Interfaces\ControllerInterface;

final class ContatoController extends Controller implements ControllerInterface {
    public function exec(): void {
        $this->view->render("contato");
    }
}

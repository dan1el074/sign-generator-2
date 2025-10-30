<?php 

namespace App\Controllers;

use App\Views\View;

abstract class Controller {
    protected View $view;

    public function __construct() {
        $this->view = new View();
    }
}

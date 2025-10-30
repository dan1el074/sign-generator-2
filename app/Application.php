<?php 

namespace App;

use App\Interfaces\ControllerInterface;

class Application {
    private string $url;
    private ControllerInterface $controller;
    
    public function execute(): void {
        if(isset($_GET['url'])) {
            $this->url = $_GET['url'];
        }
        if(!isset($_GET['url'])) {
            $this->url = "home";
        }

        $controllerName = "App\\Controllers\\" . ucfirst($this->url) . "Controller";

        $this->controller = new $controllerName;
        $this->controller->exec();
    }
}

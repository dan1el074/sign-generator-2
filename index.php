<?php 

use App\Application;

spl_autoload_register(function($class) {
    require($class . '.php');
});

$app = new Application();
$app->execute();

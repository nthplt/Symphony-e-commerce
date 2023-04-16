<?php

spl_autoload_register(function ($classname) {

    $classname = str_replace("App", "classes", $classname);
    $classname = str_replace("\\", "/", $classname);
    $classname .= ".php";

    require_once $classname;
});

$instance = new App\Calcul();

$resultat = $instance->additionner(10, 20);

var_dump($resultat);

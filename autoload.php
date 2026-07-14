<?php

spl_autoload_register(function ($clase) {

    // No intentar cargar clases internas de PHP
    if (class_exists($clase, false)) {
        return;
    }

    $ruta = '../' . str_replace("\\", "/", $clase) . ".php";

    if (file_exists($ruta)) {
        require_once $ruta;
    }
});
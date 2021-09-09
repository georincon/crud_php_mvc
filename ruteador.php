<?php

    // echo $controlador;
    // echo $accion;

    include_once("controladores/controlador_".$controlador.".php"); // incluye controlador

    $objControlador = "Controlador".ucfirst($controlador); // se convierte al nombre de la clase

    $controlador = new $objControlador(); // objeto del controlador
    
    $controlador->$accion(); // se ejecuta la accion

?>
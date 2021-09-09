<?php 

    $controlador = "paginas";
    $accion ="inicio";

    if(isset($_GET['controlador']) && isset($_GET['accion'])){
    
        if(($_GET['controlador'] != "") && ($_GET['accion'] != "")){
            $controlador = $_GET['controlador'];
            $accion = $_GET['accion'];
            //print_r($_GET);
        }


    }

    require_once("vistas/template.php");

    // https://www.youtube.com/watch?v=gPC_xbtTx-Y&t=2626s 
    // https://www.youtube.com/watch?v=gUED5uFmyQI
?>


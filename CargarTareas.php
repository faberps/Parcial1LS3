<?php
    require "php-json-file-decode/json-file-decode.class.php";
    include 'Tarea.cls.php';

    $vUsuario = $_POST['cedula'];
    $vPath = 'json/'.$vUsuario.'.json';

    if (!file_exists($vPath)) {

        $fechaHoy = date ('d-m-Y');

        
        $vTserFeliz = new Tarea("Ser Feliz",$fechaHoy,false);
        $vTPlanearS = new Tarea("Planear Semana",$fechaHoy,false);
        
        $lTareas = array($vTserFeliz,$vTPlanearS);

        var_dump($vTserFeliz);

        $json_tareas = json_encode($lTareas);
        $handler = fopen($vPath, "w+");
        fwrite($handler, $json_tareas);
        fclose($handler);
    }

    $read = new json_file_decode();
    $Tareas = $read->json($vPath);
?>
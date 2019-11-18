<?php
    require "php-json-file-decode/json-file-decode.class.php";
    include 'Tarea.cls.php';

    $vUsuario = $_POST['inputUsuario'];
    $vPath = 'json/'.$vUsuario.'.json';

    if (!file_exists($vPath)) {

        //Crear las tareas
        $fechaHoy = date ('d-m-Y');

        $vTareas = array();
        $vTserFeliz = new Tarea("Ser Feliz",$fechaHoy,false);
        $vTareas[0]= $vTserFeliz;
        $vTPlanearS = new Tarea("Planear Semana",$fechaHoy,false);
        $vTareas[1]= $vTPlanearS;

        //Crear el archivo .json
        $json_tareas = json_encode($vTareas);
        $handler = fopen($vPath, "w+");
        fwrite($handler, $json_tareas);
        fclose($handler);
    }

    $read = new json_file_decode();
    $json = $read->json($vPath);
?>
<?php
include 'Tarea.cls.php';
    $vNTarea = $_GET["tarea"];
    $vPath = 'Archivos Json/'.$_GET["usuario"].'.json';
    $oUsuario = json_decode(file_get_contents($vPath));
    $vCont = count($oUsuario);
    $vTarea = new Tarea($vNTarea, date('d-m-Y'), false);
    $oUsuario[$vCont] = $vTarea;
    file_put_contents($vPath, json_encode($oUsuario));
?>
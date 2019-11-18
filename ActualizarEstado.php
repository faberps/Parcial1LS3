<?php
    include 'Tarea.cls.php';
    $vPosicion = $_GET["indice"];
    $vid = $_GET["id"];
    $vPath = 'Archivos Json/'.$vid.'.json';
    $oUsuario = json_decode(file_get_contents($vPath));
    if($oUsuario[$vPosicion]->aEstado == true){
        $vTarea = new Tarea($oUsuario[$vPosicion]->aNombre,$oUsuario[$vPosicion]->aFecha,false);
    }else{
        $vTarea = new Tarea($oUsuario[$vPosicion]->aNombre,$oUsuario[$vPosicion]->aFecha,true);
    }
    $oUsuario[$vPosicion] = $vTarea;
    file_put_contents($vPosicion,json_encode($oUsuario));
?>
<?php
    require_once "../app/clasesbd/conexion.php";
    require_once "../app/clasesbd/crud_usuario.php";

    $obj    =   new crud_usuario();

        $datos  =   array(
            $_REQUEST['token'],
            $_REQUEST['nombre'],
            $_REQUEST['dni']
        );
echo json_encode($obj->agregar($datos));







?>
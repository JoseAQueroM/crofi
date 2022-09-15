<?php

include('db_conexion.php');
session_start();
$salida="";

if (isset($_SESSION['correo_login'])) {
    header("location: login.php");
    die();
}


if (isset($_POST['entrar'])) {
    $correo_usuario =  $_POST['correo_usuario'];
    $clave = $_POST['user_pass'];

   
    if (validarUsuario($correo_usuario, $db)) {
        if (validarLogin($correo_usuario, $clave, $db)) {
            $_SESSION['correo_login'] = $correo_usuario;
            header("location: reporte.php");
            die();
        } else {

            $salida = '<p class="errors errors-activo">Clave invalida</p>';
        }
    } else {

        $salida = '<p class="errors errors-activo">Correo invalido</p>';
    }
}

?>
<?php
include 'lib/Conexion.php';
include 'lib/Usuario.php';


$oUsr = new Usuario();

$oUsr->nombre=$_POST['nombre'];
$oUsr->clave=$_POST['pass'];


if($oUsr->VerificarUsuarioContrasenna())
{
    echo 'Existe';
}
else
{
    echo 'No existe';
}


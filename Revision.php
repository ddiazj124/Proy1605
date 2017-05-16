<?php
include 'lib/Conexion.php';
include 'lib/Usuario.php';


$oUsr = new Usuario();

$oUsr->nombre='flopez';
$oUsr->clave='1234';


if($oUsr->VerificarUsuarioContrasenna())
{
    echo 'Existe';
}
else
{
    echo 'No existe';
}


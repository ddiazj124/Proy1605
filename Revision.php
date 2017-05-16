<?php
include 'lib/Conexion.php';
include 'lib/Usuario.php';


$oUsr = new Usuario();

$oUsr->nombre='nuevo';


if($oUsr->VerificarUsuario())
{
    echo 'Existe';
}
else
{
    echo 'No existe';
}


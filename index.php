<?php
require_once "./configuracion/app.php";
require_once "./controladores/vistasControlador.php";

$plantilla  = new vistasControlador();
$plantilla->obtenerPlantillaControlador();


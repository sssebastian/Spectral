<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";

require_once "controladores/banner.controlador.php";
require_once "modelos/banner.modelo.php";

require_once "controladores/info.controlador.php";
require_once "modelos/info.modelo.php";




$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();

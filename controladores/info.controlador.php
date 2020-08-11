<?php

Class ControladorInfo{

/*=============================================
Mostrar banner
=============================================*/

static public function ctrMostrarInfo(){

	$tabla = "informacion";

	$respuesta = ModeloInfo::mdlMostrarInfo($tabla);

	return $respuesta;
}





}

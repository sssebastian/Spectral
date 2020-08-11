<?php

require_once "conexion.php";

Class ModeloInfo{

	/*=============================================
	mostrar Info
	=============================================*/
	
	static public function mdlMostrarInfo($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

}


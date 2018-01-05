<?php
//nada especial, funcion basica de mysqli para crear un objeto $con el cual contiene datos basicos para poder acceder a X base de datos
function conectar(){

		$con = mysqli_connect("localhost","root","","aysenfighers");
			// Check connection
			if (!$con) {
				 die("Connection failed: " . mysqli_connect_error());
			}
			return $con;
}
?>

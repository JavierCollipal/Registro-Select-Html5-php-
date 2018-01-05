<?php
function conectar(){

		$con = mysqli_connect("localhost","root","","aysenfighers");
			// Check connection
			if (!$con) {
				 die("Connection failed: " . mysqli_connect_error());
			}
			return $con;
}
?>
<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["apellidop"]) &&isset($_POST["apellidom"]) &&isset($_POST["rut"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&& $_POST["apellidop"]!=""&& $_POST["apellidom"]!=""&& $_POST["rut"]!=""&& $_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			$con = conectar();
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../admin_home_collipal.php';</script>";
			}
			$sql = "insert into user(username,fullname,apellidop,apellidom,rut,email,password,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[apellidop]\",\"$_POST[apellidom]\",\"$_POST[rut]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso.\");window.location='../admin_home_collipal.php';</script>";
			}
		}
	}
}



?>
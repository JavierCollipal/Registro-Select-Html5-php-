<?php
session_start();
//Isset me ayuda a evaluar si una variable esta definida y no null
//evaluacion de primer session
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
//evaluacion de SESSION especifico como lo puede ser un admin
if(!isset($_SESSION["admin_id"]) || $_SESSION["admin_id"]!="collipal"){
//print de un javascript basico redirigiendo a X pagina
  print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>formulario</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="site/css/responsive-full-background-image.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
	
<div class="panel panel-primary">
      <div class="panel-heading">Panel de registro</div>
      <div class="panel-body">
        
<form class='login-form' name="registro" action="php/registro_inside.php" method="post">

  <div class="flex-row">
    <label class="lf--label" for="username">

    </label>
    <input id="username" class='lf--input' name="username" placeholder='Username' type='text' maxlength="10">
  </div>


  <div class="flex-row">
    <label class="lf--label" for="fullname">

    </label>
    <input id="fullname" class='lf--input' name="fullname" placeholder='Nombres' type='text' maxlength="10">
  </div>


  <div class="flex-row">
    <label class="lf--label" for="apellidop">
    
    </label>
    <input id="apellidop" class='lf--input' name="apellidop" placeholder='Apellido Paterno' type='text' maxlength="10">
  </div>


  <div class="flex-row">
    <label class="lf--label" for="apellidom">
    
 </label>
    <input id="apellidom" class='lf--input' name="apellidom" placeholder='Apellido Materno' type='text' maxlength="10">
  </div>


  <div class="flex-row">
    <label class="lf--label" for="rut">
    
    </label>
    <input id="rut" class='lf--input' name="rut" placeholder='RUT' type='text' maxlength="10">
  </div>

  <div class="flex-row">
    <label class="lf--label" for="email">

    </label>
    <input id="email" class='lf--input' name="email" placeholder='E-mail' type='email'>
  </div>


  <div class="flex-row">
    <label class="lf--label" for="password">
   
    </label>
    <input id="password" class='lf--input' name="password" placeholder='Contraseña' type='password' maxlength="10">
  </div>


  <div class="flex-row">
    <label class="lf--label" for="confirm_password">
     </label>
    <input id="confirm_password" class='lf--input' name="confirm_password" placeholder='Repita Contraseña' type='password' maxlength="10">
  </div>


<button type="submit" class="btn btn-default">Registrar</button>

</form>
</div>
  <script src="site/js/valida_registro.js"></script>
<!--  fin formulario de registro -->


<div class="panel panel-primary">
      <div class="panel-heading">Panel de Vista</div>
      <div class="panel-body">
        
 <table class="table table-bordered table-condensed table-hover" contenteditable="false">
              <thead>
                <tr>
                  <th>id usuario</th>
                  <th>fullname</th>
                  <th>username</th>
                  <th>apellidop</th>
                  <th>apellidom</th>
                  <th>rut</th>
                   <th>email</th>
                  <th>password</th>
                  <th>created_at</th>
                </tr>
              </thead>
      
              <tbody>
              <!-- inicio  tabla de usuarios -->
<?php 
include("php/conexion.php");  
//se envia la consulta  
$sql1= "SELECT * FROM user";
$con = conectar();
$result = mysqli_query($con, $sql1);
//se despliega el resultado  
if ($result = mysqli_query($con, $sql1)) {
while ($row = mysqli_fetch_row($result)){  
?> 
    <tr>
    <td><a href ="admin_home_collipal.php?codigo=<?php echo $row[0]; ?>"><?php echo $row[0]; ?></a></td> 
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2] ?></td>
   <td><?php echo $row[3]; ?></td>
   <td><?php echo $row[4]; ?></td>
     <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6] ?></td>
   <td><?php echo $row[7]; ?></td>
   <td><?php echo $row[8]; ?></td>
    </tr> 
             <?php } 
                          }else{ // SI NO EXISTE EN LA BASE DE DATOS VAMOS A INGRESAR A ESTA PARTE    
                          echo "NO EXISTEN REGISTROS";
                      } ?>
              </tbody>
            </table>
            </div>
  
</div>
</div>
</div>
</div>
</body>
</html>

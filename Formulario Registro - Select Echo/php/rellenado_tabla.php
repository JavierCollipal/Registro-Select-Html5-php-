<?php 
include("php/conexion.php");  
//se envia la consulta  
$sql1= "SELECT * FROM user";
$con = conectar();
$result = mysqli_query($con, $sql1);
//se despliega el resultado  
echo "<table>";  
echo "<tr>";  
echo "<th>id usuario</th>";  
echo "<th>fullname</th>";  
echo "<th>username</th>";  
echo "<th>apellidop</th>";  
echo "<th>apedillom</th>";  
echo "<th>rut</th>";  
echo "<th>email</th>";  
echo "<th>password</th>";  
echo "<th>created_at</th>"; 
echo "</tr>";  
if ($result = mysqli_query($con, $sql1)) {
while ($row = mysqli_fetch_row($result)){   
    echo "<tr>";  
    echo "<td><a href ='admin_home_collipal.php?codigo='$row[0]'><$row[0];></a></td>";
    echo "<td>".$row[1]."</td>";  
    echo "<td>".$row[2]."</td>";  
    echo "<td>".$row[3]."</td>";  
    echo "<td>".$row[4]."</td>";  
    echo "<td>".$row[5]."</td>";  
    echo "<td>".$row[6]."</td>";  
    echo "<td>".$row[7]."</td>";  
    echo "<td>".$row[8]."</td>";  
    echo "</tr>";  
} 
} 
echo "</table>";   
?>
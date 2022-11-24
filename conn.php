<?php
$conn= mysqli_connect("localhost","root","","users");

$username=$_POST["username"];
$password=$_POST["password"];


$sql="INSERT INTO `usuarios`(`Username`, `contraseña`) VALUES ('$username','$password');";
$rs=mysqli_query($conn,$sql);

?>
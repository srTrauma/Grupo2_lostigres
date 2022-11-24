<?php

//Nos conectamos

$conn = mysqli_connect("localhost", "root", "", "users");
if($conn){
    echo("hola");
}

//Comprobamos la conexión
if($conn === true) {
    console.log("holi");
}

if($conn === false) {
    die("ERROR: No se pudo conectar". mysqli_connect_error());
}

//Tomamos los valores del form

$username = $_POST ["username"];
$password = $_POST["password"];


echo($username);
echo($password);



$sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
$rs = mysqli_query($conn, $sql);
if($sql === true) {
    echo("holi");
}

header('Location: postlogin.html');
exit;

?>
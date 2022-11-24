<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Pagina_pricipal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Pokémon - Tabla de Usuarios</title>
</head>
<body>
<div id="NavegacionBola">
    <ul>
            <li class="Lista active">
                <a href="pagina_principal.html">
                    <span id="Icono"><ion-icon name="home-outline"></ion-icon></span>
                    <span id="Texto">Inicio</span>
                </a>
            </li>
            <li id="Lista">
                <a href="Aboutus.html">
                    <span id="Icono"><ion-icon name="happy-outline"></ion-icon></span>
                    <span id="Texto">Sobre Nosotros</span>
                </a>
            </li>
            <li id="Lista">
                <a href="contact.html">
                    <span id="Icono"><ion-icon name="logo-instagram"></ion-icon></span>
                    <span id="Texto">Contacto</span>
                </a>
            </li>
            <li id="Lista">
                <a href="index.html">
                    <span id="Icono"><ion-icon name="log-in-outline"></ion-icon></span>
                    <span id="Texto">Login</span>
                </a>
            </li>
         <div class="Indicador"></div>   
    </ul>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "users";

//create connection
$connection = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

//get results from database
$resultSet = mysqli_query($connection,"SELECT * FROM users");
?>
<div id="Tablita">
<table class ="table table-bordered" >
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
           <td><?php echo $developer ['username']; ?></td>
           <td><?php echo $developer ['password']; ?></td>
           </tr>
        <?php } ?>
    </tbody>
</table>
        </div>
</html>
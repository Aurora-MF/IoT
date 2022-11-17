<?php
    include ("conexion.php");
    $con = conectar();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilapia Tec</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    
        <img src="Logo.png" alt="Logo" class="logo">
        
        
        <form class="login">
          <h1>Iniciar Sesión</h1> <br><br>
          <p> Usuario <input type="text" placeholder="Ingrese su usuario" name="usuario">  </p> <br>
          <p> Contraseña <input type="password" placeholder="Ingrese su contraseña" name="usuario"> </p>  <br>

          <input type="submit" name="" id="" value="Ingresar">
           <br>

           <a href="registrarse.html">Registrarse</a>
           <br><br>
  
          
        </form>

    </div><!--No quitar este div-->
</body>
</html>


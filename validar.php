<?php

include('db.php');

$USUARIO = $_POST['nombre'];
$PASSWORD = $_POST['password']; 

$consulta = "SELECT * FROM Personal where usuario ='$USUARIO' and password ='$PASSWORD'";
$resultado = mysqli_query($connect, $consulta);

$FILA = mysqli_num_rows($resultado); 

 if($FILA){
    header("location:home.html");
}else{
     include("index.html");
     ?>
     <h1>ERROR DE AUTENTIFICACION</h1>
     <?php 
}

mysqli_free_result($resultado);
mysqli_close($connect); 

?>
<?php
if(!isset($_SESSION['idUsuario'])){
   session_start();
}

$conexion = mysqli_connect("localhost", "usuario", "12345", "carrito");
if(mysqli_connect_errno($conexion)){
   echo "Error de conexion";
   return 0;
}
$query = "SELECT id FROM usuarios WHERE email LIKE '".$_GET['email']."' AND clave LIKE '".$_GET['clave']."'";
$resultado = mysqli_query($conexion, $query);
if (mysqli_num_rows($resultado) == 0){
   echo "<br/>Usuario invalido";
   return 0;
} else{
   $idUsuario = mysqli_fetch_array($resultado);
   $_SESSION['idUsuario'] = $idUsuario[0];
}
?>
<html>
   <body>
      <a href="index.php">Volver al inicio</a>
   </body>
</html>
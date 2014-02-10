<!DOCTYPE html>
<?php

   if(!isset($_SESSION['idUsuario'])){
      session_start();
      header('Location:login.php');
   }
   echo $_SESSION['idUsuario'];
?>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Ya estas registrado</title>
   </head>
   <body>
   </body>
</html>

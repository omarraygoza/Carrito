<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <title></title>
   </head>
   <body>
      <form action="check_login.php" method="GET" id="formulario" name="formulario">
         <p>Por favor ingresa tus datos</p>
         <table>
            <tr>
               <td>Email</td>
               <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
               <td>Clave</td>
               <td><input type="password" id="clave" name="clave"></td>
            </tr>
         </table>
         <button type="submit" id="enviar" name="enviar" value="Enviar" form="formulario" >Enviar</button>
      </form>
   </body>
</html>

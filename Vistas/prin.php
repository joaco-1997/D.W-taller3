<?php 
        session_start();
 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

       echo "Hola estas en el principal";
        ?>
        <p>Bienvenido mi estimado usuario: <b><?php echo $_SESSION['usu']; ?></b></p>
    </body>
</html>

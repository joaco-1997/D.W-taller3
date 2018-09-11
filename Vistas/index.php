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
        <form method="post" action="../Controlador/login.php">
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="nom" value="" size="30" /></td>
                        <td><input type="text" name="cla" value="" size="30" /></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" value="Login" name="Iniciar" /></td>
                    </tr>
                </tbody>
            </table>
        </form>  
        <h1><?php if(isset($_GET['resp'])){echo $_GET['resp'];} ?></h1>   
    </body>
</html>

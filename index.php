<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
                if(isset($_SESSION["Usuario"])){
            ?>
            <a href="Cerrar.php">Cerrar Sesion</a>
            <?php
                }
            ?>
        </div>
        <?php
            if(!isset($_SESSION["Usuario"])) {
        ?>
        <form method="post" action="Revision.php">
            <table>
                <tr>
                    <td>
                        NOMBRE
                    </td>
                    <td>
                        <input type="text" name="nombre">
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        CONTRASEÑA
                    </td>
                    <td>
                        <input type="password" name="pass">                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Verificar">
                    </td>
                </tr>
                    
                </tr
            </table>
            
        </form>
                
        <?php
            }
        ?>
    </body>
</html>

<?php
    $_SESSION["Saludo"]="Hola Mundo";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
    </body>
</html>

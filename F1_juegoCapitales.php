<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include 'F1_relacionPaisesEU.php';
//generamos un array con la lista de paises
$paises = array_keys($EU);
//Generamos un array con la lista de capitales
$capitales = array_values($EU);
//Los barajamos
                        shuffle($paises);
                        shuffle($capitales);
        ?>
        
        <form action="F1_relacionPaisesEU.php">
            <fieldset>
                <legend>selecciona pais</legend>
                <select name =" "pais">
                    <?php
                    foreach ($paises as $pais){
                        echo "<option value='$capitales'>$capitales</option>";
                    }
                    ?>
                    
                </select>
                
            </fieldset>
            
        </form>
            
            

        </form>
        
    </body>
</html>

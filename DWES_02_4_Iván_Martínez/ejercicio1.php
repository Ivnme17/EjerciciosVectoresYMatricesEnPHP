<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Versión A-PAR</h1>
        <?php
        /*
1. Mostrar en pantalla una tabla html de 5 por 5 con los números pares del 0 al 50 
         * (haz las dos versiones en el mismo script, colocadas una encima de otra):

Versión A: los números se colocan por filas.
Versión B: los números se colocan por columnas.
         *          */
       $array50Par=[];
        for($i = 0; $i <= 50;$i=$i+2){
            $array50Par[]=$i;
        }
        
        ?>
        <table border = "1"> 
            <?php
            $contador = 0;
            for ($i = 0; $i < 5; $i++) {//Filas
                ?>
                <tr>
                    <?php for ($j = 0; $j < 5; $j++) { //Columnas?>
                        <td><?php echo $array50Par[$contador] ?></td>
                        <?php $contador++; //Postincrementamos el contador para pasar a la siguiente posición?>
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>

        <h1>Versión B-PAR</h1>

        <table border ="1">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j < 5; $j++) { ?>
                        <td><?php echo $array50Par[$i + $j * 5]; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

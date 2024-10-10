<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
        /*
         * 2. Igual al ejercicio anterior, pero colorea el fondo de las filas 
         * impares de naranja. Además, el tamaño de las celdas será una 
         * constante definida en php: define(TAM, 8).
         */
        define("TAM", 8);//Defino la constante
        $array50=[];
        for($i=0;$i<50;$i++){
            $array50[]=$i;
        }
        ?>
        <h2>Versión A</h2>
        <table border = "1"> 
            <?php
            $contador = 0; //Generamos el contador para acceder a las posiciones del array
            for ($i = 0; $i < 5; $i++) {//filas
                ?>
            <!<!-- /</?/= es el operador de asignación ternario, a partir de una condición asigna un valor -->
                <tr <?= $i % 2 == 1 ? "style = 'background-color : orange'" : " " ?>>
                    <?php for ($j = 0; $j < 5; $j++) { //Columnas?>
                        <td><?php echo $array50[$contador] ?></td>
                        <?php $contador++; //Postincrementamos el contador?>
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>

        <h2>Versión B</h2>

        <table border ="1">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j < 5; $j++) { ?>
                        <td <?= $j % 2 == 1 ? "style='background-color:orange;'" : "" ?>><?php echo $array50[$i + $j * 5]; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>

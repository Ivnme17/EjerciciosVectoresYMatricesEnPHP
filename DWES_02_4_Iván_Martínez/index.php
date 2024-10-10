<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        
        /*
Define dos matrices, matriz1 y matriz2, y muestra en el navegador 
         * (en formato tabla) ambas matrices (indicando sus nombres) y 
         * la matriz resultado si puede realizarse la suma, y un mensaje si no 
         * puede realizarse por ser las matrices de diferente tamaño.*/     
        require_once './matrices.inc';
        //Definimos las matrices
        $matriz1 = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $matriz2 = [
            [10, 11, 12],
            [13, 14, 15],
            [16, 17, 18]
        ];
        $suma = suma_matriz($matriz1, $matriz2);
        ?>
        <h1>Matriz 1: </h1>
        <ol>
            <li><?php echo muestra_matriz($matriz1)?></br></li>
            <li><?php echo muestra_matriz($matriz2)?></li>     
        </ol>
        </br>
        </br>
        
        <h1>Suma de las matrices: </h1>

        <?php
        echo muestra_matriz($suma);
        ?>
        
    </body>
</html>

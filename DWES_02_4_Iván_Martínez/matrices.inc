<?php
        /*
3. Escribe un programa que calcule y muestre la suma de dos matrices, 
         * para cualquier rango. Para ello crea un archivo con las funciones 
         * "matrices.inc.php" y otro "index.php" que lo utilice:

Implementa la función muestra_matriz(), que escribe una matriz en el navegador (en formato tabla).
Implementa la función suma_matriz(), que recibe por parámetro dos matrices, 
         * comprueba si son del mismo tamaño y en caso afirmativo devuelve el 
         * resultado de la suma. Si son de distinto tamaño debe devolver false.
         *          */
function muestra_matriz($matriz1) { ?>
    <table border = "1"> <!-- Creamos la tabla -->
        <?php
        for ($i = 0; $i < count($matriz1); $i++) {
            ?>
            <tr>
                <?php for ($j = 0; $j < count($matriz1[$i]); $j++) {
                    ?>
                    <td><?php echo $matriz1[$i][$j] ?></td>
                <?php } ?>
            </tr> 
        <?php } ?>
    </table>
    <?php
}


function suma_matriz($matriz1, $matriz2) {
    if (count($matriz1) == count($matriz2)) {
        for ($i = 0; $i < count($matriz1); $i++) {
            for ($j = 0; $j < count($matriz1[$i]); $j++) {//Este warning es por la identación
                $r[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
            }
        }
    } else {
        $r = false;
    }
    return $r;
}

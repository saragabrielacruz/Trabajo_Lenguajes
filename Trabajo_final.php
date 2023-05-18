<?php
for ($i = 0; $i < 5; $i++) {
    echo '<div id="tabla' . ($i + 2) . '">';
    echo '<br><br>';
    echo '<table id="Tabla">';
    echo '<thead>';
    echo '<tr>';
    echo '<th style="text-align: center;" colspan="7"><strong>Tienda ' . ($i + 2) . '</strong></th>';
    echo '</tr>';
    echo '<tr>';
    echo '<th>Producto</th>';
    echo '<th>Precio</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
?>

<?php
function get_materias6to() {
    include "sql_data.php";

    $consulta = "SELECT materia FROM materias INNER JOIN cursos ON cursos.fk_materia = materias.id_materia WHERE cursos.especialidad = 'Programación' AND cursos.curso = '6to';";
    $resultado = mysqli_query($conn, $consulta);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td> - ' . $fila['materia'] . '</td>';
        echo '<br>';
        echo '</tr>';
    }
    echo '</table>';
}
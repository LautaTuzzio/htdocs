<?php
function get_materias4toElec() {
    include "sql_data.php";

    $consulta = "SELECT materia FROM materias INNER JOIN cursos ON cursos.fk_materia = materias.id_materia WHERE cursos.especialidad = 'Electronica' AND cursos.curso = '4to';";
    $resultado = mysqli_query($conn, $consulta);
    $materias4to = mysqli_fetch_assoc($resultado)['materia'];

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td> - ' . $fila['materia'] . '</td>';
        echo '<br>';
        echo '</tr>';
    }
    echo '</table>';
}

?>
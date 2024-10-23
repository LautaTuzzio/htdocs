<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/globalStyle.css">
</head>
<body>
    
<?php
    include "sql_data.php";

    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $table_name = $_POST['table'];
        if ($_POST['code'] == "1") {
            $record_id = $_POST['id'];
            
            $updated_data = [];
            foreach ($_POST as $key => $value) {
                if ($key !== 'table' && $key !== 'id'&& $key !== 'code') {
                    $updated_data[$key] = $value;
                }
            }
        
            $update_query = "UPDATE $table_name SET ";
            foreach ($updated_data as $key => $value) {
                $update_query .= "$key='$value', ";
            }
            $update_query = rtrim($update_query, ', ') . " WHERE id=$record_id";
        
            if ($conn->query($update_query) === TRUE) {
                echo "Registro actualizado correctamente.";
            } else {
                echo "Error al actualizar el registro: " . $conn->error;
            }
            } else if ($_POST['code'] == "0") {
                $insert_query = "INSERT INTO $table_name (";
                $values = [];
                foreach ($_POST as $key => $value) {
                    if ($key !== 'table' && $key !== 'code') {
                        $insert_query .= "$key, ";
                        $values[] = "'$value'";
                    }
                }
                $insert_query = rtrim($insert_query, ', ') . ") VALUES (" . implode(', ', $values) . ")";
                
                if ($conn->query($insert_query) === TRUE) {
                    echo "Registro agregado correctamente.";
                } else {
                    echo "Error al agregar el registro: " . $conn->error;
                }
            } else {
                $record_id = $_POST['id'];
                $table_name = $_POST['table'];
                $campo = $_POST['code'];

                $delete_query = "DELETE FROM $table_name WHERE $campo = $record_id";

                if ($conn->query($delete_query) === TRUE) {
                    echo "Registro eliminado correctamente.";
                } else {
                    echo "Error al eliminar el registro: " . $conn->error;
                }
            }
    }
    
    $tables_query = "SHOW TABLES";
    $tables_result = $conn->query($tables_query);
    
    if ($tables_result->num_rows > 0) {
        while ($table_row = $tables_result->fetch_row()) {
            $table_name = $table_row[0];
            echo "<h2>Tabla: $table_name</h2>";
    
            $fields_query = "DESCRIBE $table_name";
            $fields_result = $conn->query($fields_query);
    
            if ($fields_result->num_rows > 0) {
                
                $data_query = "SELECT * FROM $table_name";
                $data_result = $conn->query($data_query);
    
               
                    echo "<details><summary>Datos de la tabla:</summary>";
                    echo "<table border='1'>";
                    echo "<tr>";
                    while ($field_row = $fields_result->fetch_assoc()) {
                        echo "<th>" . $field_row['Field'] . "</th>";
                    }
            
                    echo "</tr>";
                    echo "<form method='post'>";
                    echo "<tr>";
                    echo "<input type='hidden' name='table' value='$table_name'>";
                    echo "<input type='hidden' name='code' value='0'>";
                    $fields_result->data_seek(0);
                    foreach ($fields_result->fetch_all(MYSQLI_ASSOC) as $field) {
                        echo "<td><input type='text' name='{$field['Field']}'></td> ";
                    }
                    echo "<td>";
                    echo "<input type='submit' value='Agregar'>";
                    echo "</td>";
                    echo "</tr>";
                    echo "</form>";
                 if ($data_result->num_rows > 0) {
                    while ($row = $data_result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<form method='post'>";
                        foreach ($row as $field => $value) {
                            echo "<td><input type='text' name='$field' value='$value'></td>";
                        }
                        echo "<td>";
                        echo "<input type='hidden' name='code' value='1'>";
                        echo "<input type='hidden' name='table' value='$table_name'>";
                        try {
                            if (!isset($row['id'])) {
                                throw new Exception;
                                echo "<input type='hidden' name='id' value='{$row['id']}'>";
                            }
                        }  catch (Exception) {
                           
                        }
                        echo "<input type='submit' value='Actualizar'>";
                        echo "</td>";
                        echo "<td>";
                        echo "</form>";
                        echo "<form method='post'>";
                        
                        foreach ($row as $field => $value) {
                            echo "<input type='hidden' name='code' value='$field'>";
                            echo "<input type='hidden' name='id' value='$value'>";
                            break;
                        }
                        echo "<input type='hidden' name='table' value='$table_name'>";
                        echo "<input type='submit' value='Borrar'>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";

                        
                    }
                    echo "</table></details>";
                } else {
                    echo "</table></details>";
                }
            } else {
                echo "No se encontraron campos en la tabla $table_name.";
            }
        }
    } else {
        echo "No se encontraron tablas en la base de datos.";
    }
    
?>
</body>
</html>
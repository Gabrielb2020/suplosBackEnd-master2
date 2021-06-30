<?php

include('./conexion.php');

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    return false;
}

/**
 * Borrar el bien en la base de datos
 * @param {int} Id a borrar
 */

 $id = $_POST['bienId'];

 $delete = "DELETE FROM bienes WHERE id ='$id'";

/**
 * @return {string} respuesta operación eliminado
 */
if (mysqli_query($conexion, $delete)){
    echo 'success';
}else {
    echo 'error';
}
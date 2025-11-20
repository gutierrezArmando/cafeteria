<?php

function obtenerProductos(){
    try {

        //Importar credenciales
        require 'config/database.php';
        $db = conectarDB();

        //Consulta
        $sql = "select  nombre, descripcion, precio, imagen_url from productos_menu;";
        
        //Realizar la consulta
        $result =mysqli_query($db, $sql);

        return $result;

        //cerrar conexion


    } catch (\Throwable $th) {
        echo $th;
        exit;
    }
}
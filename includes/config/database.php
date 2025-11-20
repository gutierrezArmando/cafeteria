<?php

function conectarDB(){

    try {
        $db = mysqli_connect('localhost','root','admin','cafeteria');
        return $db;
    } catch (\Throwable $th) {
        echo "Error al conectar..";
        exit;
    }
}

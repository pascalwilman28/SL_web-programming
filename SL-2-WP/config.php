<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sl-2";

    $connection = mysqli_connect($server, $username, $password, $database);

    if(!$connection){
        echo "gagal koneksi ". mysqli_connect_error();
    }
?>
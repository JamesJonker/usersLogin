<?php

    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "users_db";

    $connection = mysqli_connect($server_name, $username, $password, $db_name);

    if(! $connection) {
        echo "Connection Failed";
    }
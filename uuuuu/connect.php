<?php

    $connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'db_for_site');

    if (!$connect) {
        die('Error connect to DataBase');
    }
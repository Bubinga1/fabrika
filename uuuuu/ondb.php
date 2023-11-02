<?php

$user="root";
$password="";
$host="127.0.0.1:3306";
$db="adminka";
$dbh='mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);
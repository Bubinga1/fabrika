<?php
session_start();
require 'ondb.php';
$login=$_POST["login"];
$password=$_POST["password"];

$sql=$pdo->prepare("SELECT id,login FROM `neo` WHERE login=:login AND password=:password");// -> ( object operator ) Для вызова методов и свойств и для обращения к свойствам(полям) объекта(а не класса).
$sql->execute(array('login'=>$login,'password'=>$password)); // => — разделитель ассоциативных массивов. связывает ключ и значение.
$array=$sql->fetch(PDO::FETCH_ASSOC);// PDO Представляет соединение между PHP и сервером базы данных. PDO::FETCH_ASSOC аналог mysql_fetch_object() Обрабатывает ряд результата запроса и возвращает объект
if($array["id"]>0){
    $_SESSION['login']=$array["login"];
    header('Location:/vxod.php');
}else{
    header('Location:/login.php');
}
?>
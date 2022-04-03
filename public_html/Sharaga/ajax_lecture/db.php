<?php

session_start();
header('Content-Type: text/html; charset=UTF-8');
$id_user = $_SESSION['id'];

$db = mysqli_connect("localhost", "e99102w3_test", "G%u7FcJ0", "e99102w3_test"); // Подключение к БД
// $db = mysqli_connect("localhost", "mysql", "mysql", "de2_users");
if (!$db) {exit ("Подключение к БД не удалось");}


/*function debugs($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}*/

?>
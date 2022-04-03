<?php
//mysql_connect("хост","имя пользователя","пароль","имя бд");
    $db = mysqli_connect("localhost","x90218fj_vova","35hyR97&","x90218fj_vova");
    if($db)
    {
        echo "Подключение удалось";
    }
    else
    {
        echo "Подключение не удалось";
    }
?>
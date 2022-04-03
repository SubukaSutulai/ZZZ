<?php
    include_once("connect.php"); //Подключаем файл подключения к БД
   // Если существуют данные в массиве $_POST
    if(isset($_POST["login"]) && isset($_POST["pass"])
    && isset($_POST["username"]))
    {//Создаем переменные и присваиваем значения
        $login = $_POST["login"];
        $pass = $_POST["pass"];
        $username = $_POST["username"];
        
        if ($login != "" && $pass != "" && $username !="")
        {
          $sql2 = $db -> query (" SELECT * FROM `users` WHERE `login` = '$login' ");
        $mytablearray = mysqli_fetch_array($sql2);
        
        if($mytablearray)
        {
            echo "Такой пользователь уже существует";
        }
        else
        {
            $sql = $db -> query(" INSERT INTO `users` (`login`, `password`, `username`)
    VALUES ('$login', '$pass', '$username'); ");
    if ($sql)
    {
        echo "Вы успешно зарегистрировались";
    }
    else
    {
        echo "Что-то пошло не так...(";
    }
        }  
        }
        else
        {
            echo "Вы не заполнили поля для ввода";
        }
    }
?>

    <h2>Регистрация</h2>
<form action="" method="POST" enctype="multipart/form-data">
   <p></p> <input type="text" name="login">
    <p></p> <input type="password" name="pass">
    <p></p> <input type="text" name = "username">
    <p></p> <input type="submit" name="" value="Войти">
</form><br>
    <a href="index.php">Войти</a>
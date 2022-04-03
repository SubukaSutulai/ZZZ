<?php
include('db.php');
header('Content-Type: text/html; charset=UTF-8');

$error = '';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($name == '') {
        $error .= '<p>Имя не заполнено';
    }
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    if ($phone == '') {
        $error .= '<p>Телефон не заполнен';
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        $error .= '<p>Пароль не заполнен';
    }
}

if (isset($name) && isset($phone) && isset($password)) {
    if ($error == '') {
    
        $sql = $db->query(" SELECT * FROM `ajax_users` WHERE `phone` = '$phone' ");
        $res = mysqli_fetch_array($sql);
        if ($res) {
            $error = 'Такой пользователь уже существует';
        }
        else {
            $sql = $db->query(" INSERT `ajax_users` (`name`, `phone`, `password`) VALUES ('$name', '$phone', '$password') ");
            $error = 'Вы успешно зарегистрировались';
        }
    }
}

$otvet = array(
    "name"
    );

echo $error;



/*if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($name == '') {
        $error .= '<p>Имя не заполнено';
    }
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    if ($phone == '') {
        $error .= '<p>Телефон не заполнен';
    }
}

if (isset($name) && isset($phone)) {
    
    $otvet = array(
            "user" => $name,
            "phone" => $phone,
            "error" => $error
        );
        
    echo json_encode($otvet);
}*/


?>
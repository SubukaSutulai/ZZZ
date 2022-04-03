
<?php
    session_start(); // Отправляем заголовок на серве о запуске сессии
    $id_user = $_SESSION["iduser"];
    header('Content-Type: text/html; charset=UTF-8');
    $db = mysqli_connect("localhost", "x90218fj_vova", "35hyR97&", "x90218fj_vova"); // Подключение к БД
    $id_video = $_GET["id"]; // id видеоролика
    
    $sql2 = $db->query(" SELECT * FROM `upload` WHERE `id` = '$id_video' ");
    $result = mysqli_fetch_array($sql2);
    
    $today = date("Y-m-d H:i:s");
    
    if (isset($_POST["comments"])) {
    $comments = $_POST["comments"];
    $sql2 = $db->query(" INSERT INTO `de_comments` (`text`, `id_user`, `date_comments`, `id_video`) VALUES ('$comments', '$id_user', '$today', '$id_video') ");
    echo "Комменатрий успешно добавлен";
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Информация о видео</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div>
       
        
        <video width = "100%" height = "800px" controls="controls" poster="images/portfolio-1.jpg"
        src="<?=$result["files"];?>">
            
        </video>
        <div style = "margin-left: 50px;">
            <h1>Видео: <?=$result["name"];?></h1>
            <p><b>Описание ролика: </b><?=$result["description"];?></p>
            <p><b>Количество лайков: </b><?=$result["likes"];?></p>
            <p><b>Количество дизлайков: </b><?=$result["dislike"];?></p>
            <p><b>Дата и время загрузки:</b><?=$result["createdate"];?></p>
            <hr>

        </div>
    </div>
    <div style = "margin-left: 50px;">
        <h1 class="card-title"><b>Комментарии к видео:</b></h1>
        <h5 class="card-title"><b>Оставить комментарий</b></h5>
        <?php
        if(isset($_SESSION["iduser"])){
echo<<<HERE
        <form method = "POST">
            <p><textarea name="comments" id="" cols="50" rows="4"></textarea></p>
            <p><input type="submit" value = "Отправить"></p>
        </form>
HERE;
}
else
{
    echo "<h4 style='color: red;'>Только авторизованные пользователи могут оставить комментарий к видео</h4>";
}
        ?>
    </div>
    <h3>Комментарии пользователей:</h3>
            <?php
            
                $sql2 = $db->query(" SELECT * FROM `de_comments`, `DE_users` WHERE `de_comments`.`id_user` = `DE_users`.`id`  AND `id_video` = '$id_video'");
                $result = mysqli_fetch_array($sql2);
                do
                {
                    echo "
                    <p>Пользователь: <b><span style = 'color: gray;'>{$result["nickname"]}</span></b></p>
                    <p>Текст комментария: <b>{$result["text"]}</b></p>
                    <hr>
                    ";
                }
                while($result = mysqli_fetch_array($sql2));
            ?>
            


    
</body>
</html>
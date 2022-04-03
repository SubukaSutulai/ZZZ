<?php
    session_start();
    $id_user = $_SESSION["iduser"];
    $db = mysqli_connect("localhost", "x90218fj_vova", "35hyR97&", "x90218fj_vova"); // Подключение к БД
    if(isset($_POST["namevideo"])
    && isset($_POST["descriptionvideo"])
    && isset($_POST["category"])
    && isset($_FILES["files"]))
    {
        $namevideo = $_POST["namevideo"];
        $descriptionvideo = $_POST["descriptionvideo"];
        $category = $_POST["category"];
        $files = $_FILES["files"];
        $catalog = "video/". $files["name"];
        $today = date("Y-m-d H:i:s");
    
    
    
    
    
    
    if($namevideo!="" && $files["name"] != "")
    {
        
        if($files["type"] == "video/mp4")
        {
            $db -> query ("INSERT `upload` (`name`, `description`, `cat`, `files`, `createdate`, `id_user`) VALUES ('$namevideo', '$descriptionvideo', '$category', '$catalog', '$today', '$id_user')");
            copy($files["tmp_name"], "video/" . $files["name"]);
            echo "Файл загружен";
        }
        else
        {
            echo "Файл не формате mp4";
        }
    }
    else
    {
        echo "Вы не заполнили все поля";
    }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    		<?php
    		    include ("header.php");
    		?>
    <h1>Загрузка видео ролика</h1>
            <form method= "POST" action = "" enctype = "multipart/form-data">
                <p>
                    <input type = "text" name = "namevideo" placeholder = "Введите название ролика">
                </p>
                <p><textarea name="descriptionvideo"></textarea></p>
                <p><select name="category">
                    <option value = "Дети">Детское видео</option>
                    <option value="Родители"> Взрослое видео</option>
                    
                </select></p>
                <p><input type="file" name = "files"></p>
                <p><input type="submit" value = "Загрузить"></p>
            </form>
</body>
</html>


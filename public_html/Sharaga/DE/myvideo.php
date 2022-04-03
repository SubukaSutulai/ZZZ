<?php
    session_start();
    $id_user = $_SESSION["iduser"];
    $db = mysqli_connect("localhost", "x90218fj_vova", "35hyR97&", "x90218fj_vova"); // Подключение к БД

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Раздел | Мои видео</title>
</head>
<body>
    		<?php
    		    include ("header.php");
    		?>
    <h1>Мои видео</h1>
    <table class="table">
        <tr class="table-dark">
            <th>#</th>
            <th>Название ролика</th>
            <th>Описание ролика</th>
            <th>Количество лайков</th>
            <th>Количество дизлайков</th>
            <th>Дата и время загрузки</th>
            <th>Категория</th>
            <th>Ограничения</th>
        </tr>
        <?php
        $sql = $db -> query("SELECT * FROM `upload` WHERE `id_user` = '$id_user' ORDER BY `likes` DESC, `dislike` DESC");
        $mytable = mysqli_fetch_array($sql);
        $i = 1;
        
        do 
        {
            echo "<tr><td>$i</td>
            <td>{$mytable["name"]}</td>
            <td>{$mytable["description"]}</td>
            <td>{$mytable["likes"]}</td>
            <td>{$mytable["dislike"]}</td>
            <td>{$mytable["createdate"]}</td>
            <td>{$mytable["cat"]}</td>
            <td>{$mytable["ban"]}</td></tr>";
            $i++;
        }
        while($mytable = mysqli_fetch_array($sql));
        
        ?>
    </table>
</body>
</html>
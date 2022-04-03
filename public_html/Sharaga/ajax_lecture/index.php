<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,300&family=IBM+Plex+Serif:wght@400;700&display=swap" rel="stylesheet">
    <script src= "https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Лекция по ajax</title>
</head>
<body>
    <form id='ajax_form' method="POST">
        <p><input type="text" placeholder="Введите имя" name="name"></p>
        <p><input type="phone" placeholder="Введите телефон" name="phone"></p>
        <p><input type="password" placeholder="Введите пароль" name="password"></p>
        
        <p><button id="btn">Отправить</button></p>
        
        <!-- Ответ сервера -->
        <div id="response"></div>
    </form>
    
    
</body>
<script src = "script/ajax.js"></script>
</html>
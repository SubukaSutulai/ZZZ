<?php
    session_start(); //Отправляем заголовки на сервер о запуске сессии
    header('Content-Type: text/html; charset=UTF-8');//Кодировка страницы
    $db = mysqli_connect("localhost", "x90218fj_vova", "35hyR97&", "x90218fj_vova"); // Подключение к БД
   /* if(!$db)
    {
        exit ("Не удалось подключиться к БД");
    }*/
    $error = ""; // Переменная для сообщений пользователю
    $message = ""; //Переменная для хороших сообщений

    if(isset($_POST["email"]))
    {
        $email = $_POST["email"];if($email == ""){$error .= "<p>Вы не заполнили поле email";}
        
    }
        
     if(isset($_POST["pass"]))
    {
        $pass = $_POST["pass"];if($pass == ""){$error .= "<p>Вы не заполнили поле пароль";}
        
    }
    
    if(isset($email)&&isset($pass))
    {
    if ($error == "")
    {
        $sql = $db -> query(" SELECT * FROM `DE_users` WHERE `email` = '$email' AND `password` = '$pass' ");
        $responce = mysqli_fetch_array($sql);
            
        if($responce)
        {
         $_SESSION["nickname"] = $responce["nickname"];
         $_SESSION["role"] = $responce["role"];
         $_SESSION["iduser"] = $responce["id"];
        }
        else
        {
            $error .= "<p> Данные для входа не верны. Проверьте почту и пароль на правильность";
        }
    }
}
?>
 

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
		<meta charset="utf-8">
		<title>Твои видео | Замена YouTube</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		

		<?php
		    include ("header.php");
		?>

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">Твоё <span>| видео</span></h1>
							<p class="lead text-center">Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации соответствующий условий активизации.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->




		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Мои видео</h1>
				<div class="separator"></div>
				<p class="lead text-center">Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности в значительной степени обуславливает.</p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">Все</a></li>
								<li><a href="#" data-filter=".web-design">Веб-дизайн</a></li>
								<li><a href="#" data-filter=".app-development">Веб-разработка</a></li>
								<li><a href="#" data-filter=".site-building">SEO</a></li>
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
<?php	
$sql2 = $db-> query("SELECT* FROM `upload` WHERE `ban` = 'Нет ограничений' ORDER BY `id` DESC LIMIT 10");
$result = mysqli_fetch_array($sql2);
do{
echo <<<HERE
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div>
									    <h3>{$result["name"]}</h3>
									    <br>
										
										<video width="280" controls="controls"  poster="images/portfolio-1.jpg">
										    <source src="{$result["files"]}">
										</video>
									</div>
									<span>Дата загрузки: {$result["createdate"]}</span>
								</div>
								<a href="view_video.php?id={$result["id"]}">Просмотр видеоролика</a>
							</div>
HERE;
}
while($result = mysqli_fetch_array($sql2));
?>							

						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-2 pb-clear">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="clients" class="title text-center">Наши преимущества</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Доступность</h3>
								<blockquote>
									<p>Мы с Вами 24/7</p>
									<footer>В любой момент времени <cite title="Source Title">и всегда on-line</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Бесплатность</h3>
								<blockquote>
									<p>Наш видео сервис совершенно бесплатный</p>
									<footer>Мы не требуем оплаты <cite title="Source Title">все добровольно</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Креативность</h3>
								<blockquote>
									<p>У нас лучший сайт в сети</p>
									<footer>Не веришь, не верь <cite title="Source Title">но это так</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Поддержка</h3>
								<blockquote>
									<p>Разнообразный и богатый опыт постоянный количественный рост и сфера</p>
									<footer>что дальнейшее развитие различных форм <cite title="Source Title">нашей деятельности</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Новая модель</h3>
								<blockquote>
									<p>Определения и уточнения направлений прогрессивного развития.</p>
									<footer>Равным образом новая модель <cite title="Source Title">организационной деятельности требуют от нас </cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Лучшие в деле!</h3>
								<blockquote>
									<p>Значимость этих проблем настолько очевидна.</p>
									<footer>в особенности же новая модель  <cite title="Source Title">организационной деятельности позволяет выполнять</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section start -->
			<!-- ================ -->
			<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-1.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-2.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-3.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-4.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-5.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-6.png" alt="client">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">100500+ загруженных видео!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Войти</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">Повседневная практика показывает, что новая модель организационной деятельности влечет за собой процесс внедрения и модернизации новых предложений. </p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
									<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
									<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
									<li><i class="fa fa-envelope-o pr-10"></i> your@email.com</li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
							    <?php
							    if (!empty($_SESSION["nickname"]))
									{
										echo "<p> Добро пожаловать <b> {$_SESSION ["nickname"]}<b></p>
										      <p> Перейти в <a href='profile.php'> Личный кабинет </a> | <a href ='exit.php'> Выйти </a> </p>
										      <p><a href='newvideo.php'>Добавить новое видео</a></p>
										      <p><a href='myvideo.php'>Мои видео</a></p>";
									}
								else
									{
									    
echo <<<HERE
                                <form role="form" id="footer-form" method = "POST" action = "">
									
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Введите Ваш email</label>
										<input type="email" class="form-control" id="email2" placeholder="Введите Ваш email" name="email" >
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Введите Ваш Повтор пароля</label>
										<input type="password" class="form-control" id="email2" placeholder="Введите Ваш Пароль" name="pass" >
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>	
									
									<input type="submit" value="Войти" class="btn btn-default">		
									<br><br> 
									<p><a href="reg.php">Регистрация</a></p>
								</form>
HERE;
}
?>						
								<?php
								    if($error !="")
								    {
								        echo " <div class='alert alert-danger mt-5' role='alert' style = 'margin-top: 15px'> $error </div>";
								    }
								    if($message !="")
								    {
								        echo " <div class='alert alert-success mt-5' role='alert' style = 'margin-top: 15px'> $message </div>";
								    }
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>

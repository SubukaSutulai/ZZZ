<?php
    header('Content-Type: text/html; charset=UTF-8');//Кодировка страницы
    $db = mysqli_connect("localhost", "x90218fj_vova", "35hyR97&", "x90218fj_vova"); // Подключение к БД
   /* if(!$db)
    {
        exit ("Не удалось подключиться к БД");
    }*/
    $error = ""; // Переменная для сообщений пользователю
    $message = ""; //Переменная для хороших сообщений
    if(isset($_POST["nickname"]))
    {
        $nickname = $_POST["nickname"];if($nickname == ""){$error .= "<p>Вы не заполнили поле никнейм";}
        
    }
        
        if(isset($_POST["email"]))
    {
        $email = $_POST["email"];if($email == ""){$error .= "<p>Вы не заполнили поле email";}
        
    }
        
     if(isset($_POST["pass"]))
    {
        $pass = $_POST["pass"];if($pass == ""){$error .= "<p>Вы не заполнили поле пароль";}
        
    }
        
     if(isset($_POST["pass2"]))
    {
        $pass2 = $_POST["pass2"];if($pass2 == ""){$error .= "<p>Вы не заполнили поле пароль";}
        
    }
    if(isset($nickname)&&isset($email)&&isset($pass) && isset($pass2))
    {
    if ($error == "")
    {
        if ($pass == $pass2)
        {
            $sql = $db -> query(" SELECT * FROM `DE_users` WHERE `nickname` = '$nickname' ");
            $responce = mysqli_fetch_array($sql);
            
            if($responce)
            {
                $error .="<p> Такой пользователь есть в БД";
            }
            else
            {
                $db -> query ("INSERT `DE_users` (`nickname`, `email`, `password`) VALUES ('$nickname', '$email', '$pass2');");
                $message ="<p> Успешно зарегистрировались";
            }
        }
        else
        {
            $error .= "<p> Пароли не совпадает";
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
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

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
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-1.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Видео о Веб-дизайне</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-1-label">Видео о Веб-дизайне</h4>
											</div>
											<div class="modal-body">
												<h3>Информация о видео</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-2.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>Открыть видео о разработке</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Видео о Веб-разработке</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-2-label">Видео о Веб-разработке</h4>
											</div>
											<div class="modal-body">
												<h3>Видео о Веб-разработке</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-3.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-3">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Правила веб-дизайна</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-3-label">Правила веб-дизайна</h4>
											</div>
											<div class="modal-body">
												<h3>Правила веб-дизайна</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-4.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">SEO-продвижение</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-4-label">SEO-продвижение</h4>
											</div>
											<div class="modal-body">
												<h3>SEO-продвижение</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-5.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-5">
											<i class="fa fa-search-plus"></i>
											<span>App Development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">PHP фремворки</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-5-label">PHP фремворки</h4>
											</div>
											<div class="modal-body">
												<h3>PHP фремворки</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-6.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-6">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Веб-цвета</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-6-label">Веб-цвета</h4>
											</div>
											<div class="modal-body">
												<h3>Веб-цвета</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-7.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-7">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Внутренняя оптимизация</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-7-label">Внутренняя оптимизация</h4>
											</div>
											<div class="modal-body">
												<h3>Внутренняя оптимизация</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-8.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-8">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Создание дизайна в figma</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-8-label">Создание дизайна в figma</h4>
											</div>
											<div class="modal-body">
												<h3>Создание дизайна в figma</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-9.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-9">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">Дизайн landing page</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-9-label">Дизайн landing page</h4>
											</div>
											<div class="modal-body">
												<h3>Дизайн landing page</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-10.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-10">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Внешняя оптимизация</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-10-label">Внешняя оптимизация</h4>
											</div>
											<div class="modal-body">
												<h3>Внешняя оптимизация</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-11.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-11">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">Что такое типографика</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-11-label">Что такое типографика</h4>
											</div>
											<div class="modal-body">
												<h3>Что такое типографика</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-12.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-12">
											<i class="fa fa-search-plus"></i>
											<span>App Development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Язык JavaScript</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-12-label">Язык JavaScript</h4>
											</div>
											<div class="modal-body">
												<h3>Язык JavaScript</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

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
					<h1 class="title text-center" id="contact">Pегистрация</h1>
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
								<form role="form" id="footer-form" method = "POST" action = "">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Введите Ваш никнейм</label>
										<input type="text" class="form-control" id="name2" placeholder="Введите Ваш никнейм" name="nickname" >
										<i class="fa fa-user form-control-feedback"></i>
									</div>
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
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Повторите пароль</label>
										<input type="password" class="form-control" id="email2" placeholder="Повторите пароль" name="pass2" >
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>													
									<input type="submit" value="Регистрация" class="btn btn-default">
									<br> <br>
									<p><a href="index.php">На главную</a></p>
								</form>
								
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

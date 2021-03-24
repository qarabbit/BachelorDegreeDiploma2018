<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Справочник констукционных материалов </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Arinko">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="/front_user/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/front_user/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/front_user/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/front_user/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="/front_user/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/front_user/fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="/front_user/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="/front_user/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="/front_user/css/style.css">
    <link rel="stylesheet" type="text/css" href="/front_user/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="/front_user/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <div id="includedHeader">

    </div>

    @yield('content')

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>2018</p>
            </div>
            <!-- <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> -->
        </div>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/front_user/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="/front_user/js/bootstrap.js"></script>
    <script type="text/javascript" src="/front_user/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="/front_user/js/jquery.isotope.js"></script>

    <script src="/front_user/js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="/front_user/js/main.js"></script>

    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/">На главную</a>
	    </div>

	    <form class="navbar-form navbar-left" action="{{ action('IndexController@getSearch') }}" method="get">
		<div class="form-group">
		    <input class="form-control" placeholder="Поиск" name="search" value="">
		</div>
		<button type="submit" class="btn btn-default">Искать</button>
	    </form>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
		    <li><a href="/materials" class="page-scroll">Материалы</a></li>
		    <li><a href="/gosts" class="page-scroll">ГОСТы</a></li>
		    <li><a target="_blank" href="/forum/index.php" class="page-scroll">Форум</a></li>
		    <li><a href="/education" class="page-scroll">Обучение</a></li>
		    <li><a href="/prices" class="page-scroll">Цены</a></li>
		    <li><a href="/feedback" class="page-scroll">Обратная связь</a></li>
		    <li>
			@if (Auth::check())
			    <a href="/user" class="icon-personal-area"></a>
			@else
			    <a href="#" class="icon-personal-area" data-toggle="modal" data-target=".login-form"></a>
			@endif
		    </li>
		</ul>
	    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
    </nav>

    <!-- modal : begin -->
    <div class="modal fade login-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
		<form class="form-horizontal" role="form" action="{{ action('LoginController@login') }}" method="post">
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <input type="text" id="login_username" name="username" placeholder="Email" class="form-control" required autofocus>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <input type="password" id="login_password" name="password" placeholder="Пароль" class="form-control" required>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-6 col-sm-offset-3">
			    <a href="" data-toggle="modal" data-target=".restore-pass">Забыли пароль?</a>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="submit" class="btn btn-primary btn-block">Войти</button>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target=".reg-form">Зарегистрироваться</a>
			</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>

    <div class="modal fade reg-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
		<form class="form-horizontal" role="form" action="{{ action('LoginController@reg') }}" method="post">
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <input type="text" id="reg_login" name="reg_login" placeholder="Логин" class="form-control" required autofocus>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <input type="password" id="reg_password" name="reg_password" placeholder="Пароль" class="form-control" required>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <input type="text" id="reg_email" name="reg_email" placeholder="Email" class="form-control" required>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target=".reg-form">Отправить</button>
			</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>

    <div class="modal fade restore-pass" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
		<form class="form-horizontal" role="form" action="{{ action('LoginController@restorepass') }}" method="post">
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <input type="text" id="restore_email" name="restore_email" placeholder="Email" class="form-control" required autofocus>
			</div>
		    </div>
		    <div class="form-group">
			<div class="col-sm-12">
			    <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target=".reg-form">Восстановить</button>
			</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>

    <div class="modal fade reg-form-1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
		<form class="form-horizontal" role="form">
		    <div class="form-group">
			<div class="col-sm-12">Сообщение!</div>
		    </div>
		</form>
	    </div>
	</div>
    </div>
<!-- modal : end -->
  </body>
</html>
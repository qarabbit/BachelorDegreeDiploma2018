<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRM</title>

    <link href="/front_admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front_admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/front_admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/front_admin/css/animate.css" rel="stylesheet">
    <link href="/front_admin/css/style.css" rel="stylesheet">

    <link href="/front_admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/front_admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/front_admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

</head>

<body onload="ShowForm();">

    <div id="wrapper">

	<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle img-responsive" src="" width="60px" />
                             </span>
                        <a href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                             </span> <span class="text-muted text-xs block">{{Auth::user()->role}} </span> </span> </a>
                    </div>
                    <div class="logo-element">
                        CRM
                    </div>
                </li>
                <li>
                    <a href="/admin/index"><i class="fa fa-flask"></i> <span class="nav-label">Главная</span> </a>
		    <a href="/admin/categories"><i class="fa fa-flask"></i> <span class="nav-label">Категории</span> </a>
		    <a href="/admin/materials"><i class="fa fa-flask"></i> <span class="nav-label">Материалы</span> </a>
		    <a href="/admin/tests"><i class="fa fa-flask"></i> <span class="nav-label">Тесты</span> </a>
		    <a href="/admin/news"><i class="fa fa-flask"></i> <span class="nav-label">Новости</span> </a>
		    <a href="/admin/feedbacks"><i class="fa fa-flask"></i> <span class="nav-label">Вопросы с сайта</span> </a>
		    <a href="/admin/staticpages"><i class="fa fa-flask"></i> <span class="nav-label">Статические страницы</span> </a>
		    <a href="/admin/users"><i class="fa fa-flask"></i> <span class="nav-label">Пользователи</span> </a>
		    <a href="/admin/profile"><i class="fa fa-flask"></i> <span class="nav-label">Профиль</span> </a>
                </li>
            </ul>

        </div>
    </nav>

	<div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">

                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Добро пожаловать, {{Auth::user()->email}}</span>
                </li>
                <li>
                    <a href="/logout">
                        <i class="fa fa-sign-out"></i> Выход
                    </a>
                </li>
            </ul>

        </nav>
        </div>

	    @yield('content')

	</div>

    </div>



    <!-- Mainly scripts -->
    <script src="/front_admin/js/jquery-2.1.1.js"></script>
    <script src="/front_admin/js/bootstrap.min.js"></script>
    <script src="/front_admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/front_admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="/front_admin/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/front_admin/js/inspinia.js"></script>
    <script src="/front_admin/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="/front_admin/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="/front_admin/js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <!-- Custom and plugin javascript -->
    <script src="/front_admin/js/inspinia.js"></script>
    <script src="/front_admin/js/plugins/pace/pace.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="/front_admin/js/plugins/summernote/summernote.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#descr').summernote({
		height: 250,
		toolbar: [
		  ['style', ['bold', 'italic', 'underline', 'clear']],
		]
	    });
	    $('#comment').summernote({
		height: 250,
		toolbar: [
		  ['style', ['bold', 'italic', 'underline', 'clear']],
		]
	    });
	});
    </script>

    <!-- Data picker -->
   <script src="/front_admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <script>
   $('#data_5 .input-daterange').datepicker({
	keyboardNavigation: false,
	forceParse: false,
	autoclose: true
    });
    </script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRM</title>

    <link href="/front_admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front_admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/front_admin/css/animate.css" rel="stylesheet">
    <link href="/front_admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">CRM</h1>

            </div>
            <h3>Добро пожаловать!</h3>
            <p>
		Для входа в систему введите свою почту и пароль
            </p>
            <form class="m-t" role="form" action="{{ action('LoginController@login') }}" method="post">
                <div class="form-group">
                    <input type="email" name="username" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Войти</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/front_admin/js/jquery-2.1.1.js"></script>
    <script src="/front_admin/js/bootstrap.min.js"></script>

</body>

</html>
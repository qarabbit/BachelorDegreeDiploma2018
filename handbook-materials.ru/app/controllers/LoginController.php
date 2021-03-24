<?php

class LoginController extends BaseController {
    public function getIndex() {
        return View::make('admin/login');
    }

    public function reg() {
	$user = new User();
	$user->login = Input::get('reg_login');
	$user->email = Input::get('reg_email');
	$user->password = Hash::make(Input::get('reg_password'));
	$user->isActive = 1;
	$user->role = 'user';
	$user->save();

	Auth::loginUsingId($user->id);

	return Redirect::to('/');
    }

    public function login() {
        $creds = array(
            'password' => Input::get('password'),
            'isActive'  => 1,
        );

        $username = Input::get('username');
        $creds['email'] = $username;

        // Пытаемся авторизовать пользователя
        if (Auth::attempt($creds, Input::has('remember'))) {
            Log::info("User [{$username}] successfully logged in.");

	    if (Auth::user()->role == 'admin') {
		return Redirect::to('admin/index');
	    }
	    elseif (Auth::user()->role == 'manager') {
		return Redirect::to('managers/index');
	    }
	    elseif (Auth::user()->role == 'user') {
		return Redirect::to('/');
	    }
	    else {
		return Redirect::to('/');
	    }
        } else {
            Log::info("User [{$username}] failed to login.");
        }

        $alert = "Неверный Email или пароль.";
        return Redirect::back()->withAlert($alert);
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('/');
    }

    public function restorepass() {
	$email = Input::get('email');

	$user = User::where('email', '=', $email)->first();

	$pass = rand(1000000,9999999);

	if ($user) {
	    $user->password = Hash::make($pass);
	    $user->save();
	    Mail::send('emails/restorepass',
		array('pass' => $pass),
		function ($message) use ($email) {
		    $message->to($email)->subject('Восстановление пароля');
		}
	    );

	    $alert = "Новый пароль отправлен на вашу электронную почту!";
	}
	else {
	    $alert = "Пользователь с такой электронной почтой не найден";
	}

	return Redirect::to('/')->withAlert($alert);
    }
}
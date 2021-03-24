<?php

class UserController extends BaseController {
    public function getIndex() {
	$feedbacks = Feedback::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'ASC')->get();

	return View::make('user/index', array(
	    'nav_name' => 'Главная',
	    'feedbacks' => $feedbacks,
        ));
    }

    public function postProfile() {
	$user = User::find(Auth::user()->id);

	$password = Input::get('password');
	if ($password != '') {
	    $user->password = Hash::make($password);
	}

	$user->save();

	$alert = "Ваш профиль успешно отредактирован!";
	return Redirect::to('user')->withAlert($alert);
    }
}
<?php

class PagesController extends BaseController {
    public function getView($id) {
	$sp = Staticpage::find($id);

	if (($sp->on_pay == 1) && (!Auth::check() || (Auth::user()->pay_flag != 1))) {
	    unset($sp);
	    $sp = new Staticpage();
	    $sp->name = 'Доступ запрещен';
	    $sp->text = 'Для доступа к странице оплатите подписку!';
	}

        return View::make('index/staticpage', array(
	    'nav_name' => 'index',
	    'sp' => $sp,
        ));
    }
}
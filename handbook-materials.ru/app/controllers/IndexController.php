<?php

class IndexController extends BaseController {
    public function getIndex() {
	$news = News::orderBy('created_at', 'DESC')->take(3)->get();

	foreach ($news as $item) {
	    if ($item->image != '') {
		Image::make($_SERVER['DOCUMENT_ROOT'] . '/upload/' . $item->image)->grab(360, 206)->save($_SERVER['DOCUMENT_ROOT'] . '/upload/thumb_' . $item->image);
	    }
	}

	$cats = Category::orderBy('name', 'asc')->get();

	//кол-во зарегистрированных пользователей
	$count_users = User::where('role', '=', 'user')->count();

        return View::make('index/index', array(
	    'nav_name' => 'index',
	    'news' => $news,
	    'cats' => $cats,
	    'count_users' => $count_users,
        ));
    }

    public function getSearch() {
	$search = Input::get('search');

	$materials = Material::where('name', 'LIKE', '%'.$search.'%')->orWhere('text', 'LIKE', '%'.$search.'%')->get();
	$news = News::where('title', 'LIKE', '%'.$search.'%')->orWhere('short_text', 'LIKE', '%'.$search.'%')->orWhere('full_text', 'LIKE', '%'.$search.'%')->get();

	return View::make('index/search', array(
	    'nav_name' => 'index',
	    'news' => $news,
	    'materials' => $materials,
	    'search' => $search,
        ));
    }

    public function getEducation() {
	return View::make('index/education', array(
	    'nav_name' => 'education',
        ));
    }

    public function getTermin() {
	return View::make('index/termin', array(
	    'nav_name' => 'termin',
        ));
    }

    public function getExperiment() {
	return View::make('index/experiment', array(
	    'nav_name' => 'experiment',
        ));
    }

    public function getGosts() {
	$sp = Staticpage::find(1);

	return View::make('index/staticpage', array(
	    'nav_name' => 'gosts',
	    'sp' => $sp,
        ));
    }

    public function getPrices() {
	$sp = Staticpage::find(2);

	return View::make('index/staticpage', array(
	    'nav_name' => 'prices',
	    'sp' => $sp,
        ));
    }

    public function postSendfeedback() {
	$feedback = new Feedback();
	if (Auth::check()) {
	    $feedback->user_id = Auth::user()->id;
	}
	else {
	    $feedback->user_id = 0;
	}
	$feedback->name = Input::get('feedback_name');
	$feedback->email = Input::get('feedback_email');
	$feedback->quest = Input::get('feedback_quest');

	$feedback->save();

	$alert = "Сообщение отправлено!";
	return Redirect::to('/')->withAlert($alert);
    }

    public function getFeedback() {
	return View::make('index/feedback', array(
	    'nav_name' => 'feedback',
        ));
    }

    public function getNews() {
	$news = News::orderBy('created_at', 'DESC')->get();

	return View::make('index/news', array(
	    'nav_name' => 'news',
	    'news' => $news,
        ));
    }
}
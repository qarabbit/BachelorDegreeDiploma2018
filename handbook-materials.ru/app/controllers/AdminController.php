<?php

class AdminController extends BaseController {
    public function getIndex() {
	return View::make('admin/index', array(
	    'nav_name' => 'Главная',
        ));
    }

    //тесты
    public function getTests() {
	$tests = Test::all();

	return View::make('admin/tests', array(
	    'nav_name' => 'Тесты',
	    'tests' => $tests,
        ));
    }

    public function getTest($id = null) {
	if ($id) {
	    $test = Test::find($id);

	    return View::make('admin/test', array(
		'nav_name' => 'Тесты',
		'test' => $test,
	    ));
	}
	else {
	    return View::make('admin/test_add', array(
		'nav_name' => 'Тесты',
	    ));
	}
    }

    public function postTest($id = null) {
	if ($id) {
	    $test = Test::find($id);
	}
	else {
	    $test = new Test();
	}

	$test->title = Input::get('title');
	$test->save();

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/test/'.$test->id)->withAlert($alert);
    }

    public function getTestdelete($id) {
	$test = Test::find($id);

	DB::table('quests')->where('test_id', '=', $id)->delete();

	$test->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/tests')->withAlert($alert);
    }

    public function postQuest($test_id) {
	$quest = new Quest();
	$quest->test_id = $test_id;
	$quest->answer_1 = Input::get('answer_1');
	$quest->answer_2 = Input::get('answer_2');
	$quest->answer_3 = Input::get('answer_3');
	$quest->answer_4 = Input::get('answer_4');
	$quest->question = Input::get('question');
	$quest->correct_answer = Input::get('correct_answer');
	$quest->save();

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/test/'.$test_id)->withAlert($alert);
    }

    public function getQuestdelete($id) {
	$quest = Quest::find($id);

	$test_id = $quest->test_id;

	$quest->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/test/'.$test_id)->withAlert($alert);
    }

    //статические страницы
    public function getStaticpages() {
	$sp = Staticpage::all();

	return View::make('admin/staticpages', array(
	    'nav_name' => 'Статические страницы',
	    'sp' => $sp,
        ));
    }

    public function getStaticpage($id = null) {
	if ($id) {
	    $sp = Staticpage::find($id);

	    return View::make('admin/staticpage', array(
		'nav_name' => 'Статические страницы',
		'sp' => $sp,
	    ));
	}
	else {
	    return View::make('admin/staticpage_add', array(
		'nav_name' => 'Статические страницы',
	    ));
	}
    }

    public function postStaticpage($id = null) {
	if ($id) {
	    $sp = Staticpage::find($id);
	}
	else {
	    $sp = new Staticpage();
	}

	$sp->name = Input::get('name');
	$sp->text = Input::get('text');
	$sp->on_pay = Input::get('on_pay');
	$sp->save();

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/staticpages')->withAlert($alert);
    }

    public function getStaticpagedelete($id) {
	$sp = Staticpage::find($id);
	$sp->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/staticpages')->withAlert($alert);
    }

    //материалы
    public function getMaterials() {
	$materials = Material::all();

	return View::make('admin/materials', array(
	    'nav_name' => 'Материалы',
	    'materials' => $materials,
        ));
    }

    public function getMaterial($id = null) {
	if ($id) {
	    $material = Material::find($id);
	    $cats = Category::all();
	    $properties = Property::where('material_id', '=', $id)->get();
	    $tmp = array();
	    if ($properties) {
		foreach ($properties as $item) {
		    $tmp[] = $item->value;
		}
		$prop = implode(',', $tmp);
	    }
	    else {
		$prop = '';
	    }

	    return View::make('admin/material', array(
		'nav_name' => 'Материалы',
		'cats' => $cats,
		'material' => $material,
		'prop' => $prop,
	    ));
	}
	else {
	    $cats = Category::all();

	    return View::make('admin/material_add', array(
		'nav_name' => 'Материалы',
		'cats' => $cats,
	    ));
	}
    }

    public function postMaterial($id = null) {
	if ($id) {
	    $material = Material::find($id);
	}
	else {
	    $material = new Material();
	}

	$path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
	$file = Input::file('image');
	if ($file) {
	    $name = time() . '_' . $file->getClientOriginalName();
	    $file->move($path, $name);
	    $material->image = $name;
	} else {
	    if (!$id) {
		$material->image = '';
	    }
	}

	$material->name = Input::get('name');
	$material->cat_id = Input::get('cat_id');
	$material->text = Input::get('text');
	$material->save();

	//формируем свойства
	DB::table('properties')->where('material_id', '=', $material->id)->delete();
	$tmp_prop = explode(',', Input::get('properties'));
	foreach ($tmp_prop as $prop) {
	    $property = new Property();
	    $property->material_id = $material->id;
	    $property->value = trim($prop);
	    $property->save();
	}

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/materials')->withAlert($alert);
    }

    public function getMaterialdelete($id) {
	$material = Material::find($id);

	$path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

	if ($material->image != '') {
	    if (file_exists($path . 'thumb_' . $material->image)) {
		unlink($path . 'thumb_' . $material->image);
	    }
	    if (file_exists($path . $material->image)) {
		unlink($path . $material->image);
	    }
	}

	$material->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/materials')->withAlert($alert);
    }

    //категории
    public function getCategories() {
	$cats = Category::all();

	return View::make('admin/categories', array(
	    'nav_name' => 'Категории',
	    'cats' => $cats,
        ));
    }

    public function getCategory($id = null) {
	if ($id) {
	    $cat = Category::find($id);

	    return View::make('admin/category', array(
		'nav_name' => 'Категории',
		'cat' => $cat,
	    ));
	}
	else {
	    return View::make('admin/category_add', array(
		'nav_name' => 'Категории',
	    ));
	}
    }

    public function postCategory($id = null) {
	if ($id) {
	    $cat = Category::find($id);
	}
	else {
	    $cat = new Category();
	}

	$cat->name = Input::get('name');
	$cat->save();

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/categories')->withAlert($alert);
    }

    public function getCategorydelete($id) {
	$cat = Category::find($id);
	$cat->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/categories')->withAlert($alert);
    }

    //обратная связь
    public function getFeedbacks() {
	$feedbacks = Feedback::all();

	return View::make('admin/feedbacks', array(
	    'nav_name' => 'Вопросы с сайта',
	    'feedbacks' => $feedbacks,
        ));
    }

    public function getFeedback($id) {
	$feedback = Feedback::find($id);

	return View::make('admin/feedback', array(
	    'nav_name' => 'Вопросы с сайта',
	    'feedback' => $feedback,
	));
    }

    public function postFeedback($id) {
	$feedback = Feedback::find($id);
	$answer = Input::get('answer');
	if ($answer != '') {
	    $feedback->answer = $answer;
	}
	$feedback->save();

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/feedbacks')->withAlert($alert);
    }

    public function getFeedbackdelete($id) {
	$feedback = Feedback::find($id);
	$feedback->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/feedbacks')->withAlert($alert);
    }

    //новости
    public function getNews() {
	$news = News::all();

	return View::make('admin/news', array(
	    'nav_name' => 'Новости',
	    'news' => $news,
        ));
    }

    public function getNew($id = null) {
	if ($id) {
	    $news = News::find($id);

	    return View::make('admin/new', array(
		'nav_name' => 'Новости',
		'news' => $news,
	    ));
	}
	else {
	    return View::make('admin/new_add', array(
		'nav_name' => 'Новости',
	    ));
	}
    }

    public function postNew($id = null) {
	if ($id) {
	    $news = News::find($id);
	}
	else {
	    $news = new News();
	}

	$news->title = Input::get('title');
	$news->short_text = Input::get('short_text');
	$news->full_text = Input::get('full_text');

	$path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
	$file = Input::file('image');
	if ($file) {
	    $name = time() . '_' . $file->getClientOriginalName();
	    $file->move($path, $name);
	    $news->image = $name;
	} else {
	    if (!$id) {
		$news->image = '';
	    }
	}

	$news->save();

	$alert = "Запись успешно отредактирована!";
	return Redirect::to('admin/news')->withAlert($alert);
    }

    public function getNewsdelete($id) {
	$news = News::find($id);

	$path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

	if (file_exists($path . 'thumb_' . $news->image)) {
	    unlink($path . 'thumb_' . $news->image);
	}
	if (file_exists($path . $news->image)) {
	    unlink($path . $news->image);
	}

	$news->delete();

	$alert = "Запись успешно удалена!";
	return Redirect::to('admin/news')->withAlert($alert);
    }

    //профиль
    public function getProfile() {
	$user = User::find(Auth::user()->id);

	return View::make('admin/profile', array(
	    'nav_name' => 'Ваш профиль',
	    'user' => $user,
        ));
    }

    public function postProfile() {
	$user = User::find(Auth::user()->id);
	$user->lastname = Input::get('lastname');
	$user->firstname = Input::get('firstname');

	$password = Input::get('password');
	if ($password != '') {
	    $user->password = Hash::make($password);
	}

	$user->save();

	$alert = "Ваш профиль успешно отредактирован!";
	return Redirect::to('admin/profile')->withAlert($alert);
    }

    //пользователи
    public function getUsers() {
	$users = User::orderBy('created_at', 'desc')->paginate(30);

	return View::make('admin/users', array(
	    'nav_name' => 'Пользователи',
	    'users' => $users,
        ));
    }

    public function getUser($id = null) {
	if ($id) {
	    $user = User::find($id);

	    return View::make('admin/user', array(
		'nav_name' => 'Профиль пользователя',
		'user' => $user,
	    ));
	}
	else {
	    return View::make('admin/user_add', array(
		'nav_name' => 'Профиль пользователя',
	    ));
	}
    }

    public function postUser($id = null) {
	if ($id) {
	    $user = User::find($id);
	}
	else {
	    $user = new User();
	    $user->email = Input::get('email');
	}

	$user->role = Input::get('role');
	$user->login = Input::get('login');
	$user->pay_flag = Input::get('pay_flag');
	$user->isActive = Input::get('isActive');

	if (Input::get('password') != '') {
	    $user->password = Hash::make(Input::get('password'));
	}

	$user->save();

	$alert = "Пользователь успешно отредактирован!";
	return Redirect::to('admin/users')->withAlert($alert);
    }

    public function getUserdelete($id) {
	$user = User::find($id);
	$user->delete();

	$alert = "Пользователь успешно удален!";
	return Redirect::to('admin/users')->withAlert($alert);
    }
}
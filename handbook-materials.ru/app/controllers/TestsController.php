<?php

class TestsController extends BaseController {
    public function getIndex() {
	$tests = Test::all();

        return View::make('index/tests', array(
	    'nav_name' => 'tests',
	    'tests' => $tests,
        ));
    }

    public function getTest($id) {
	$test = Test::find($id);

        return View::make('index/test', array(
	    'nav_name' => 'tests',
	    'test' => $test,
        ));
    }

    public function postChecktest($id) {
	$quests = Input::get('quest');
	$answers = Input::get('answer');

	$test = Test::find($id);

	$quest_count = count($test->quests);

	$right_count = 0;

	foreach ($test->quests as $quest) {
	    if ($quests[$quest->id] == $answers[$quest->id]) {
		$right_count++;
	    }
	}

	return View::make('index/test_check', array(
	    'nav_name' => 'tests',
	    'test' => $test,
	    'quest_count' => $quest_count,
	    'right_count' => $right_count,
        ));
    }
}
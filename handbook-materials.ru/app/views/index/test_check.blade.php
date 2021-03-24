@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">{{$test->title}}</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
        </div>
    </div>
</div>
<!-- Contact Section
    ==========================================-->
<div id="tf-contact" class="text-left">
    <div class="container">

	<div class="row">
	    <div class="col-md-6">
		<strong>Всего вопросов: </strong> {{$quest_count}}
	    </div>
	    <div class="col-md-6">
		<strong>Правильных ответов: </strong> {{$right_count}}
	    </div>
	</div>

	<br/>

	<form method="post" action="{{ action('TestsController@postChecktest') }}/{{$test->id}}">
	@foreach ($test->quests as $quest)
        <div class="row">
            <div class="col-md-12">
		<strong>{{$quest->question}}</strong>
            </div>
	    <div class="col-md-12">
		<div class="radio">
		    <label>
		      <input type="radio" name="quest[{{$quest->id}}]" value="{{$quest->answer_1}}" checked>
		      {{$quest->answer_1}}
		    </label>
		</div>
		<br/>
		<div class="radio">
		    <label>
		      <input type="radio" name="quest[{{$quest->id}}]" value="{{$quest->answer_2}}">
		      {{$quest->answer_2}}
		    </label>
		</div>
		<br/>
		<div class="radio">
		    <label>
		      <input type="radio" name="quest[{{$quest->id}}]" value="{{$quest->answer_3}}">
		      {{$quest->answer_3}}
		    </label>
		</div>
		<br/>
		<div class="radio">
		    <label>
		      <input type="radio" name="quest[{{$quest->id}}]" value="{{$quest->answer_4}}">
		      {{$quest->answer_4}}
		    </label>
		</div>
	    </div>
        </div>
	<input type="hidden" name="answer[{{$quest->id}}]" value="{{$quest->correct_answer}}">
	@endforeach
	<div class="row">
	    <div class="col-md-12">
		<button type="submit" class="btn tf-btn btn-default">Ответить</button>
	    </div>
	</div>
	</form>
    </div>
</div>

@stop
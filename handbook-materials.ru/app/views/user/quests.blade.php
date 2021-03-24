@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
             <h1><strong><span class="color">Ваш профиль</span></strong></h1>
         </div>
     </div>
 </div>

<!-- Services Section
  ==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong>Ваш профиль</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

         </div>
         <div class="space"></div>
         <div class="row text-left">
             <div class="col-md-3">
		<h3>Меню</h3>
		<ul>
		    <li><a href="/user/quests">Ваши вопросы</a></li>
		    <li><a href="/user/articles">Просмотренные статьи</a></li>
		    <li><a href="/user/tests">Пройденные тесты</a></li>
		</ul>
	     </div>
	     <div class="col-md-9">
		 <h3>Ваши вопросы</h3>
		 <br/>
		 @foreach ($feedbacks as $item)
		    <div class="row">
			<div class="col-md-12">
			    <p>
				<strong>Задан:</strong> {{$item->created_at}}
			    </p>
			    <p>
				<strong>Вопрос:</strong> {{$item->quest}}
			    </p>
			    <p>
				<strong>Ответ администратора:</strong> @if ($item->answer && ($item->answer != '')) {{$item->answer}} @else Нет ответа @endif
			    </p>
			    <hr/>
			</div>
		    </div>
		 @endforeach
	     </div>
         </div>
     </div>
 </div>

@stop
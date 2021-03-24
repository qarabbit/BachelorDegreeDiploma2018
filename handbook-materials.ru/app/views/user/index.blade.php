@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">Личный кабинет</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
        </div>
    </div>
</div>


<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong>Личный кабинет</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="{{ action('UserController@postProfile') }}" method="post">
		    <div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" disabled="">
		    </div>
		    <div class="form-group">
			<label>Логин</label>
			<input type="text" class="form-control" name="login" value="{{Auth::user()->login}}" disabled="">
		    </div>
		    <div class="form-group">
			<label>Дата регистрации</label>
			<input type="text" class="form-control" name="created_at" value="{{Auth::user()->created_at}}" disabled="">
		    </div>
		    <div class="form-group">
			<label for="exampleInputPassword1">Пароль</label>
			<input type="password" class="form-control" name="password" placeholder="Пароль" required="">
		    </div>
		    <button type="submit" class="btn btn-default">Сохранить</button>
		</form>
            </div>
        </div>
        <div class="space"></div>
        <div class="section-title center">
            <h2><strong>Ваши обращения</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="list-group text-left">
		    <?php $i=1; ?>
		    @foreach ($feedbacks as $item)
			<li class="list-group-item" data-toggle="modal" data-target=".recourse{{$item->id}}">#{{$i}}, {{$item->quest}}, {{$item->created_at}}</li>
			<?php $i++; ?>

			<div class="modal fade recourse{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			    <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				    <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Задан {{$item->created_at}}</h4>
				    </div>
				    <div class="modal-body">
					<p class="mb-10">Текст обращения. {{$item->quest}}</p>
					<hr>
					<p class="mb-10">Ответ администрации. {{$item->answer}}</p>
				    </div>
				</div>
			    </div>
			</div>
		    @endforeach
                </ul>
            </div>
        </div>
        <div class="space"></div>
        <div class="section-title center">
            <h2><strong>Вы смотрели</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="space"></div>
        <div class="row">
            <a href="#" class="product-card col-xs-6 col-sm-4 col-md-4" data-toggle="modal" data-target=".descr-item">
                <img src="/front_user/img/03.jpg" alt="" class="img-thumbnail">
                <h6>Текст</h6>
            </a>
            <a href="#" class="product-card col-xs-6 col-sm-4 col-md-4" data-toggle="modal" data-target=".descr-item">
                <img src="/front_user/img/03.jpg" alt="" class="img-thumbnail">
                <h6>Текст</h6>
            </a>
            <a href="#" class="product-card col-xs-6 col-sm-4 col-md-4" data-toggle="modal" data-target=".descr-item">
                <img src="/front_user/img/03.jpg" alt="" class="img-thumbnail">
                <h6>Текст</h6>
            </a>
        </div>
    </div>
</div>


<div class="modal fade recourse" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Заголовок</h4>
            </div>
            <div class="modal-body">
                <p class="mb-10">Текст обращения. Не следует, однако забывать, что реализация намеченных плановых заданий требуют от нас анализа дальнейших направлений развития. Таким образом укрепление и развитие структуры играет важную роль в формировании новых предложений. Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании соответствующий условий активизации. Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности требуют определения и уточнения дальнейших направлений развития.</p>
                <hr>
                <p class="mb-10">Ответ администрации</p>
            </div>
        </div>
    </div>
</div>

@stop
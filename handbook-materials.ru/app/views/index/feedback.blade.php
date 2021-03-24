@extends('index/layout')

@section('content')

    <div id="tf-home" class="text-center">
	<div class="overlay">
	    <div class="content">
		<h1><strong><span class="color">Обратная связь</span></strong></h1>
	    </div>
	</div>
    </div>
    <!-- Contact Section
	==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2><strong>Обратная связь</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Напишите нам</em></small>
                    </div>

                    <form method="post" action="{{ action('IndexController@postSendfeedback') }}" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="feedback_email">Email</label>
                                    <input type="email" class="form-control" id="feedback_email" name="feedback_email" placeholder="Введите ваш email для обратной связи" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="feedback_name">Имя</label>
                                    <input type="text" class="form-control" id="feedback_name" name="feedback_name" placeholder="Как к Вам обращаться?" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="feedback_quest">Сообщение</label>
                            <textarea class="form-control" id="feedback_quest" name="feedback_quest" rows="3" placeholder="Введите текст сообщения" required=""></textarea>
                        </div>

                        <button type="submit" class="btn tf-btn btn-default">Отправить</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

@stop
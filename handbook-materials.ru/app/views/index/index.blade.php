@extends('index/layout')

@section('content')

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Добро пожаловать в <br><strong><span class="color"> Справочник конструкционных материалов</span></strong></h1>
            </div>
        </div>
    </div>

    <!-- About Site
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="/front_user/img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2> О сайте</h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">Данный справочник содержит полную информацию о <strong> конструкционных материалах, </strong> а также существующие <strong>ГОСТы, цены на материалы</strong> </p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Материалы</strong> - <em>Найдите любую информацию с помощью умных фильтров</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Форум</strong> - <em>Общайтесь, делитесь, обменивайтесь информацией с другими людьми</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Обучение</strong> - <em>Обучайте своих сотрудников, студентов, себя</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Цены</strong> - <em>Узнайте актуальные цены на рынке</em>
                            </li>
			    <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Всего зарегистрировано пользователей</strong> - <em>{{$count_users}}</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2> Типы материалов </h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
		    @foreach ($cats as $cat)
                    <div class="item">
                        <div class="thumbnail">
                            <img src="/front_user/img/team/01.jpg" alt="{{$cat->name}}" class="img-circle team-img">
                            <div class="caption">
                                <h3><a href="/materials/section/{{$cat->id}}">{{$cat->name}}</a></h3>
                            </div>
                        </div>
                    </div>
		    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Обучение</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Терминология, тесты для самопроверки и многое другое</em></small>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-book"></i>
                    <h4><a href="/termin">Терминология</a></h4>
                </div>

                <div class="col-md-3 col-sm-6 service">
                    <i class="fa fa-book"></i>
                    <h4><a href="/experiment">Методы испытаний</a></h4>
                </div>

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

    <div class="container" style="padding-bottom: 20px;">
      <div class="row">
	  @foreach ($news as $item)
          <div class="news-card col-xs-6 col-sm-4 col-md-4" data-toggle="modal" data-target=".full-news{{$item->id}}">
              <p class="news-card__date"><?php echo date('d.m.Y', strtotime($item->created_at)); ?></p>
              <h3>{{$item->title}}</h3>
              <img src="/upload/thumb_{{$item->image}}" alt="{{$item->title}}" class="img-thumbnail">
              <h6>{{$item->short_text}}</h6>
          </div>

	  <div class="modal fade full-news{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	    <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">{{$item->title}}</h4>
		    </div>
		    <div class="modal-body">
			<img src="/upload/thumb_{{$item->image}}" alt="{{$item->title}}" class="full-news__img img-thumbnail">
			<p class="mb-10">{{$item->full_text}}</p>
			<p class="full-news__date"><?php echo date('d.m.Y', strtotime($item->created_at)); ?></p>
		    </div>
		</div>
	    </div>
	  </div>
	  @endforeach
      </div>
	<div class="row text-center">
	    <a href="/news" class="btn btn-warning">Все новости</a>
	</div>
    </div>

@stop
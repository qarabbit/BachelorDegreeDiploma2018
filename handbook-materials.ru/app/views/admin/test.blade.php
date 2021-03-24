@extends('admin/layout')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{$nav_name}}</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Создание данных</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{ action('AdminController@postTest') }}/{{$test->id}}" enctype="multipart/form-data">
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Название</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="title" value="{{$test->title}}" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Сохранить</button>
                                    </div>
                                </div>
                            </form>

			    <hr/>

			    <div class="table-responsive">
				<table class="table table-striped">
				    <thead>
				    <tr>
					<th>Вопрос</th>
					<th></th>
				    </tr>
				    </thead>
				    <tbody>
					@foreach ($test->quests as $item)
					    <tr>
						<td>{{$item->question}}</td>
						<td>
						    <a href="/admin/questdelete/{{$item->id}}">Удалить</a>
						</td>
					    </tr>
					@endforeach
				    </tbody>
				</table>
			    </div>

			    <hr/>

			    <form method="post" class="form-horizontal" action="{{ action('AdminController@postQuest') }}/{{$test->id}}" enctype="multipart/form-data">
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Вопрос</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="question" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ответ 1</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="answer_1" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ответ 2</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="answer_2" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ответ 3</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="answer_3" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ответ 4</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="answer_4" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Правильный ответ</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="correct_answer" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Добавить вопрос</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@stop
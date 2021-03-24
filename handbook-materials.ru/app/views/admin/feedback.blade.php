@extends('admin/layout')

@section('content')

<script src="/ckeditor/ckeditor.js"></script>

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
                            <h5>Вопросы с сайта</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{ action('AdminController@postFeedback') }}/{{$feedback->id}}" enctype="multipart/form-data">
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Автор</label>
                                    <div class="col-sm-10">{{$feedback->name}}</div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">{{$feedback->email}}</div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Сообщение</label>
                                    <div class="col-sm-10">{{$feedback->quest}}</div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Ответ администратора</label>
                                    <div class="col-sm-10"><textarea class="form-control" id="answer" name="answer" >{{$feedback->answer}}</textarea></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@stop
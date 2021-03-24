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
                            <h5>Настройка ваших личных данных. Если не хотите менять пароль - просто оставьте соответствующее поле пустым. </h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{ action('AdminController@postProfile') }}" enctype="multipart/form-data">
				<div class="form-group"><label class="col-lg-2 control-label">Электронная почта</label>
                                    <div class="col-lg-10">
					<p class="form-control-static">{{$user->email}}</p>
					<span class="help-block m-b-none">Ваша электронная почта не может быть изменена!</span>
				    </div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Фамилия</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="lastname" value="{{$user->lastname}}" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Имя</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Новый пароль</label>
                                    <div class="col-sm-10"><input type="password" class="form-control" name="password"></div>
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
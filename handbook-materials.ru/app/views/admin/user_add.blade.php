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
                            <h5>Создание пользователя</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{ action('AdminController@postUser') }}" enctype="multipart/form-data">
				<div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="email" value="" required=""></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Login</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="login" value="" required=""></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Пароль</label>
                                    <div class="col-sm-10"><input type="password" class="form-control" name="password" required=""></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Уровень пользователя</label>
                                    <div class="col-sm-10">
					<select class="form-control m-b" name="role">
					    <option value="user" selected>Пользователь</option>
					    <option value="admin">Администратор</option>
					</select>
                                    </div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Заблокировать пользователя</label>
                                    <div class="col-sm-10">
					<select class="form-control m-b" name="isActive">
					    <option value="1" selected>Нет</option>
					    <option value="0">Да</option>
					</select>
                                    </div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Оплаченная подписка</label>
                                    <div class="col-sm-10">
					<select class="form-control m-b" name="pay_flag">
					    <option value="0" selected>Нет</option>
					    <option value="1">Да</option>
					</select>
                                    </div>
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
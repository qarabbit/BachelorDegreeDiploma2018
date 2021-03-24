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
                            <h5>Пользователи </h5>
                            <div class="ibox-tools">
				<a href="/admin/user">Создать</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table table-striped">
				    <thead>
				    <tr>
					<th>Email</th>
					<th>Логин </th>
					<th>Уровень </th>
					<th>Оплаченная подписка </th>
					<th>Дата регистрации </th>
					<th></th>
				    </tr>
				    </thead>
				    <tbody>
					@foreach ($users as $user)
					    <tr>
						<td><a href="/admin/user/{{$user->id}}">{{$user->email}}</a></td>
						<td>{{$user->login}}</td>
						<td>{{$user->role}}</td>
						<td>
						    @if ($user->pay_flag)
							Да
						    @else
							Нет
						    @endif
						</td>
						<td>{{$user->created_at}}</td>
						<td>
						    <a href="/admin/user/{{$user->id}}">Редактировать</a>
						    <a href="/admin/userdelete/{{$user->id}}">Удалить</a>
						</td>
					    </tr>
					@endforeach
				    </tbody>
				</table>

				<?php echo $users->links(); ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

@stop
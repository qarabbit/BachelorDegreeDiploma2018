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
		    <h5>Вопросы с сайта</h5>
		    <div class="ibox-tools">

		    </div>
		</div>
		<div class="ibox-content">
		    <div class="table-responsive">
			<table class="table table-striped">
			    <thead>
			    <tr>
				<th>ID</th>
				<th>Автор </th>
				<th>Email </th>
				<th>Сообщение </th>
				<th>Ответ администратора </th>
				<th>Дата создания </th>
				<th></th>
			    </tr>
			    </thead>
			    <tbody>
				@foreach ($feedbacks as $item)
				    <tr>
					<td><a href="/admin/feedback/{{$item->id}}">{{$item->id}}</a></td>
					<td>{{$item->name}}</td>
					<td>{{$item->email}}</td>
					<td>{{$item->quest}}</td>
					<td>{{$item->answer}}</td>
					<td><?php echo date('d.m.Y H:i', strtotime($item->created_at)); ?></td>
					<td>
					    <a href="/admin/feedback/{{$item->id}}">Ответить</a>
					    <a href="/admin/feedbackdelete/{{$item->id}}">Удалить</a>
					</td>
				    </tr>
				@endforeach
			    </tbody>
			</table>
		    </div>

		</div>
	    </div>
	</div>
    </div>
</div>

@stop
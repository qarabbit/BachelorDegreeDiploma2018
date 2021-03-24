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
                            <h5>Создание данных</h5>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{ action('AdminController@postMaterial') }}/{{$material->id}}" enctype="multipart/form-data">
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Название</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="name" value="{{$material->name}}" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Свойства (через запятую, если свойств несколько)</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="properties" value="{{$prop}}"></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Описание</label>
                                    <div class="col-sm-10"><textarea class="form-control" id="text" name="text" >{{$material->text}}</textarea></div>
                                </div>
				<script>
				    CKEDITOR.replace( 'text' );
				</script>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Изображение</label>
                                    <div class="col-sm-10"><input type="file" class="form-control" name="image" /></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Категория</label>
                                    <div class="col-sm-10">
					<select class="form-control m-b" name="cat_id">
					    @foreach ($cats as $item)
						<option value="{{$item->id}}" @if ($material->cat_id == $item->id) selected @endif>{{$item->name}}</option>
					    @endforeach
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
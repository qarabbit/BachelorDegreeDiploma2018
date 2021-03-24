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
                            <form method="post" class="form-horizontal" action="{{ action('AdminController@postNew') }}" enctype="multipart/form-data">
				<div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Название</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="title" value="" required="" ></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Краткий текст</label>
                                    <div class="col-sm-10"><textarea class="form-control" id="short_text" name="short_text" ></textarea></div>
                                </div>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Полный текст</label>
                                    <div class="col-sm-10"><textarea class="form-control" id="full_text" name="full_text" ></textarea></div>
                                </div>
				<script>
				    CKEDITOR.replace( 'full_text' );
				</script>
				<div class="hr-line-dashed"></div>
				<div class="form-group"><label class="col-sm-2 control-label">Изображение</label>
                                    <div class="col-sm-10"><input type="file" class="form-control" name="image" /></div>
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
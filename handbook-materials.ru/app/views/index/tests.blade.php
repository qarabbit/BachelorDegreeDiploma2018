@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">Тестирование</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
        </div>
    </div>
</div>
<!-- Contact Section
    ==========================================-->
<div id="tf-contact" class="text-left">
    <div class="container">

	@foreach ($tests as $test)
        <div class="row">
            <div class="col-md-12">
		<strong><a href="/tests/test/{{$test->id}}">{{$test->title}}</a></strong>
            </div>
        </div>
	@endforeach
    </div>
</div>

@stop
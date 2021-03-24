@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">Обучение</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
        </div>
    </div>
</div>
<!-- Contact Section
    ==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-book"></i>
                <h4><a href="/termin">Терминология</a></h4>
            </div>

	    <div class="col-md-3 col-sm-6 service">
		   <i class="fa fa-book"></i>
		   <h4><a href="/experiment">Методы испытаний</a></h4>
	    </div>

	    <div class="col-md-3 col-sm-6 service">
		   <i class="fa fa-question"></i>
		   <h4><a href="/tests">Тестирование</a></h4>
	    </div>
        </div>

    </div>
</div>

@stop
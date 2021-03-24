@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">{{$sp->name}}</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
        </div>
    </div>
</div>
<!-- Contact Section
    ==========================================-->
<div id="tf-contact" class="text-left">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
		{{$sp->text}}
            </div>
        </div>

    </div>
</div>

@stop
@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
             <h1><strong><span class="color">Материалы</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
         </div>
     </div>
 </div>





<!-- Services Section
  ==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong>Все категории</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

         </div>
         <div class="space"></div>
         <div class="row">
	     @foreach ($cats as $item)
             <div class="col-md-3 col-sm-6 service">
                 <i class="fa fa-bookmark"></i>
                 <h4><a href="/materials/section/{{$item->id}}"><strong>{{$item->name}}</strong></a></h4>
             </div>
	     @endforeach
         </div>
     </div>
</div>

@stop
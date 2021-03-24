@extends('index/layout')

@section('content')

    <div id="tf-home" class="text-center">
	<div class="overlay">
	    <div class="content">
		<h1><strong><span class="color">Новости</span></strong></h1>
	    </div>
	</div>
    </div>
    <!-- Contact Section
	==========================================-->
    <div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong>Новости</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="space"></div>
        <div class="row">
            @foreach ($news as $item)
	    <div class="news-card col-xs-6 col-sm-4 col-md-4" data-toggle="modal" data-target=".full-news{{$item->id}}">
		<p class="news-card__date"><?php echo date('d.m.Y', strtotime($item->created_at)); ?></p>
		<h3>{{$item->title}}</h3>
		<img src="/upload/thumb_{{$item->image}}" alt="{{$item->title}}" class="img-thumbnail">
		<h6>{{$item->short_text}}</h6>
	    </div>

	    <div class="modal fade full-news{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	      <div class="modal-dialog modal-lg" role="document">
		  <div class="modal-content">
		      <div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			  <h4 class="modal-title">{{$item->title}}</h4>
		      </div>
		      <div class="modal-body">
			  <img src="/upload/thumb_{{$item->image}}" alt="{{$item->title}}" class="full-news__img img-thumbnail">
			  <p class="mb-10">{{$item->full_text}}</p>
			  <p class="full-news__date"><?php echo date('d.m.Y', strtotime($item->created_at)); ?></p>
		      </div>
		  </div>
	      </div>
	    </div>
	    @endforeach
        </div>
    </div>
</div>

@stop
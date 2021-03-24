@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">Поиск</span></strong></h1>
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
		<strong>Вы искали:</strong> {{$search}}
            </div>
        </div>

	<div class="row">
            <div class="col-md-12">
		<h3>Материалы</h3>
		<?php if (count($materials)) { ?>
		@foreach ($materials as $item)
		    <div class="product-card col-xs-6 col-sm-4 col-md-4" data-toggle="modal" data-target=".descr-item{{$item->id}}">
                        <img src="/upload/thumb_{{$item->image}}" alt="{{$item->name}}" class="img-thumbnail">
                        <h6>{{$item->name}}</h6>
                    </div>

		    <div class="modal fade descr-item{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
				<!-- <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				    </button>
				</div> -->
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    <h4 class="modal-title">{{$item->name}}</h4>
				</div>
				<div class="modal-body text-left">
				    <img src="/upload/{{$item->image}}" alt="{{$item->name}}" class="img-rounded img-adaptive mb-10">
				    <p class="mb-10">
					{{$item->text}}
				    </p>
				</div>
			    </div>
			</div>
		    </div>
		@endforeach
		<?php } else { ?>
		Ничего не найдено
		<?php } ?>
            </div>
        </div>

	<div class="row">
            <div class="col-md-12">
		<h3>Новости</h3>
		<?php if (count($news)) { ?>
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
		<?php } else { ?>
		Ничего не найдено
		<?php } ?>
            </div>
        </div>

    </div>
</div>

@stop
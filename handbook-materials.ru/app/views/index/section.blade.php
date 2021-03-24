@extends('index/layout')

@section('content')

<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">{{$cur_cat->name}}</span></strong></h1>
            <!--  <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
        </div>
    </div>
</div>


<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2><strong>Что Вас интересует?</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-2">
                <h2 class="filter-title">Фильтр</h2>
                <form class="form-horizontal" role="form" method="get" action="">
                    @foreach ($props as $item)
		    <div class="checkbox">
                        <label>
			    <input <?php if ((!empty($filter_props)) && in_array($item->value, $filter_props)) { echo 'checked'; } ?> type="checkbox" name="filter_props[]" value="{{$item->value}}">
                            {{$item->value}}
                        </label>
                    </div>
                    @endforeach
		    <br/>
		    <button type="submit" class="btn btn-default">Фильтровать</button>
                </form>
            </div>
            <div class="col-md-7">
                <div class="row">
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
                </div>
                <div class="row">
                    <nav aria-label="Page navigation">
                        <?php echo $materials->links(); ?>
                    </nav>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="list-group">
		    @foreach ($cats as $cat)
                    <li class="list-group-item"><a href="/materials/section/{{$cat->id}}"><strong>{{$cat->name}}</strong></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@stop
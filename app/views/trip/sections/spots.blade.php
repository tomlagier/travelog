<div class="row">
	<div class="spots-wrapper col-sm-10 col-sm-offset-1">
		<h2>The places I went</h2>
		<div class="masonry">
			<div class="grid-sizer"></div>
			@foreach ($trip->spots as $spot)
				<div href="#" class="spot item panel panel-info" data-spot="{{$spot->id}}">		
					<div class="panel-heading">
						<h3 class="panel-title">{{$spot->title}}</h3>
					</div>
					<div class="spot-image">	
						<img src="{{$spot->image->med_location}}" alt="">
					</div>
					<div class="panel-body">
						<div class="dates">
							<span class="arrived">{{DateHelper::displayDate($spot->arrived)}}</span> - <span class="departed">{{DateHelper::displayDate($spot->departed)}}</span>
						</div>
						<div class="rating rating-{{$spot->rating}}"></div>
						<div class="description">{{$spot->description}}</div>
					</div>
				</div>
			@endforeach
	</div>
</div>
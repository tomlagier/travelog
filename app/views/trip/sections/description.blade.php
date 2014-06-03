<div class="trip-body row">
	
	<div class="col-sm-7 col-sm-offset-1">
		<div class="trip-description lead">
			{{$trip->description}}
		</div>
	
		<div class="trip-photos photos">
			@foreach($trip->photos as $photo)
				<div class="photo-wrapper square">
					<a class="photo full-image-wrapper fancybox" rel="trip-description-gallery" href="{{$photo->full_location}}" title="{{$photo->description}}">
						<img class="full-image" src="{{$photo->thumb_location}}">
					</a>
				</div>
			@endforeach
		</div>
	</div>

	<div class="trip-aside col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3>At a glance</h3>
			</div>
			<div class="panel-body">
				<p>Arrived: {{$trip->arrived}}</p>
				<p>Departed: {{$trip->departed}}</p>
				<p>Other snippets go here</p>
			</div>
		</div>
	</div>

</div>
<div class="spots-overlays">
	@foreach($trip->spots as $spot)
		<div class="spot-overlay" data-spot-target="{{$spot->id}}">
			
			<div class="upper-frame">

				<div class="spot-overlay-controls">
					<div class="left"></div>
					<div class="right"></div>
				</div>

				<div class="spot-overlay-title">
					<h2>
						<span>{{$spot->title}}</span>
					</h2>
				</div>

				<div class="spot-overlay-image">
					<img src="{{$spot->image->full_location}}" alt=""/>
				</div>
				
				<div class="info-window-wrapper">
					<div class="info-window-controls btn-group" data-toggle="buttons">
						<label class="btn btn-default active" type="button">
							<input type="checkbox"><span class="glyphicon glyphicon-globe"> </span>
						</label>
						<label class="btn btn-default active" type="button">
							<input type="checkbox"><span class="glyphicon glyphicon-eye-open"> </span>
						</label>
						<label class="btn btn-default active" type="button">
							<input type="checkbox"><span class="glyphicon glyphicon-info-sign"> </span>
						</label>
					</div>
					<div class="info-window">
						<div class="spot-overlay-address">
							Location: {{$spot->address}}
						</div>
						<div class="spot-overlay-arrived">
							Arrived: {{DateHelper::displayDate($spot->arrived)}}
						</div>
						<div class="spot-overlay-departed">
							Departed: {{DateHelper::displayDate($spot->departed)}}
						</div>
					</div>
				</div>
					
				<div class="spot-overlay-description-wrapper">
					<div class="spot-overlay-description">
						{{$spot->description}}
					</div>
				</div>

			</div>

			<div class="lower-frame">

				<div class="spot-overlay-photos">
					<div data-id="0" class="spot-overlay-photo active" data-large-url="{{$spot->image->full_location}}" data-description="{{$spot->description}}">
						<img class="thumbnail" src="{{$spot->image->thumb_location}}" />
					</div>
					<?php $counter = 1; ?>
					@foreach($spot->photos as $photo)
						<div data-id="{{$counter}}" class="spot-overlay-photo" data-large-url="{{$photo->full_location}}" data-description="{{$photo->description}}">
							<img class="thumbnail" src="{{$photo->thumb_location}}" />
						</div>
						<?php $counter++; ?>
					@endforeach
				</div>

			</div>

		</div>
	@endforeach	
</div>
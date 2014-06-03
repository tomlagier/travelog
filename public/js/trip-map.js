//Initialize the app
Travelog.initialize = function() {

  //Clean up our trip object and prepare for plotting
  Travelog.initTrip(Travelog.trip);
  
  //Create our map
  Travelog.createMap();

  //Run the map draw animation
  Travelog.runAnimation();

}

//Creates our map!
Travelog.createMap = function(){

	//Placeholder until bounds are set
	var mapOptions = {
    	center: Travelog.trip.spots[0].location,
    	scrollwheel: false,
    	zoom: 8
  	};
  
  	Travelog.map = new google.maps.Map($('#map-canvas')[0], mapOptions);

  	Travelog.setMarkers();
  	Travelog.scaleMap();
}



//Cleans up our trip object for further processing
Travelog.initTrip = function(trip){
	Travelog.trip = JSON.parse(Travelog.trip);
	Travelog.trip.spots = Travelog.getSpots(Travelog.trip.spots);
	Travelog.trip.photos = Travelog.getPhotos(Travelog.trip.photos);
}

//Returns a collection of spots
//Spots are data representations of places that make up a trip
//Spots consist of:
// 	* string title (required)
// 	* text description (optional)
// 	* Date startDate (required)
// 	* Date endDate (required)
// 	* int rating (optional)
// 	* google.maps.LatLng location (required)
// 	* string address (required)
// 	* Travelog.photos photos (optional)
Travelog.getSpots = function(spots){

	var spotList = [], spot = {}, photos = '';

	spots.forEach(function(rawSpot){

		spot = {
			title : rawSpot.title,
			description : rawSpot.description || false,
			startDate : Date.parse(rawSpot.arrived),
			endDate : Date.parse(rawSpot.departed),
			rating : rawSpot.rating || false,
			location : new google.maps.LatLng(rawSpot.latitude, rawSpot.longitude),
			address: rawSpot.address,
			photos : (typeof(rawSpot.photos) !== 'undefined') ? Travelog.getPhotos(rawSpot.photos) : false
		};

		spotList.push(spot);
	});

	return spotList;
}

//Returns a collection of photos
//Photos consist of:
// 	* string src (required)
// 	* text description (optional)
Travelog.getPhotos = function(photos){
	var photosList = [], photo = {};

	photos.forEach(function(rawPhoto){
		photo = {
			src : rawPhoto.image,
			description : rawPhoto.description || false
		};

		photosList.push(photo);
	});

	return photosList;
}

//Accepts a Spot, adds it to the map as a marker
Travelog.addSpot = function(spot){
	var marker = new google.maps.Marker({
		position: spot.location,
		title: spot.title,
		animation: google.maps.Animation.DROP
	});

	Travelog.addWindow(spot, marker);
}

//Accepts a spot, adds an info window for that spot
Travelog.addWindow = function(spot, marker){
	
	var content = Travelog.createInfoWindowNode(spot);
	
	var infowindow = new google.maps.InfoWindow({
      	content: content
  	});

	//On click, close all other windows and open this window
	//TODO: Create cool looking overlay
	google.maps.event.addListener(marker, 'click', function(){
		Travelog.infowindows.forEach(function(iwindow){
			iwindow.close();
		});

		infowindow.open(Travelog.map, marker);
	});

	//Update our list of markers and info windows
	Travelog.markers.push(marker);
	Travelog.infowindows.push(infowindow);
}

//Creates the DOM element to load into the info window, returns selector
Travelog.createInfoWindowNode = function(spot){

	var startDate = new Date(spot.startDate);
	var endDate = new Date(spot.endDate);

	var contentString = '<div id="spot-' + spot.id + '" class="spot-info-window">';
	contentString += '<div class="title">' + spot.title + '</div>';
	contentString += '<div class="address">' + spot.address + '</div>';
	if(spot.description){
		contentString += '<div class="description">' + spot.description + '</div>';
	}
	if(spot.rating){
		contentString += '<div class="rating">' + spot.rating + '</div>';
	}
	contentString += '<div class="start-date">' + startDate.toDateString() + '</div>';
	contentString += '<div class="end-date">' + endDate.toDateString() + '</div>';
	//Put photos here
	$('#info-windows').append(contentString);

	return $('#spot-' + spot.id)[0];
}

//Adds all marker information from the current trip to the map
Travelog.setMarkers = function(){
	Travelog.markers = [], Travelog.infowindows = [];

	//Spots need to be sorted for addLine
	Travelog.sortSpots();

	//Add each spot
	Travelog.trip.spots.forEach(function(spot){
		Travelog.addSpot(spot);
	});

	//Add all lines
	Travelog.addLines();

}

//Sorts spots in-place
Travelog.sortSpots = function(){
	Travelog.trip.spots.sort(function(a, b){
		if(a.startDate < b.startDate){
			return -1;
		}

		if(a.startDate > b.startDate){
			return 1;
		}
		return 0;
	});
}

//Runs the animation by stepping through all markers, dropping them in, then moving the map beyond it.
Travelog.runAnimation = function(){
	
	
	//Add our symbols to our map
	Travelog.markers[0].setMap(Travelog.map);
	
	//Run an animation step every xxx ms
	Travelog.animationStep = 0;
	var animationDelay = 1200, intervalId = '';
	intervalId = setInterval(function(){
		if(Travelog.animationStep < Travelog.linePoints.length){
			Travelog.animate(Travelog.animationStep, animationDelay);
			Travelog.animationStep++;
		} else{
			clearInterval(intervalId);
		}
	}, animationDelay);
}

//Animates the line to a marker and drops it in
//Step is the current animation step
//Delay is the time until the next animation step
//Will apply an easing function
Travelog.animate = function(step, delay){
	
	var totalTime = delay - 300;
	var oldIcons = [];

	//Remove previous arrow icon
	if(step > 0){
		oldIcons = Travelog.lines[step - 1].get('icons');
		oldIcons[1].icon.fillOpacity = 0;
		Travelog.lines[step - 1].set('icons', oldIcons);
	}

	//Set up new line
	Travelog.animateLine(step, totalTime);

	//Drop the marker in after the animation is finished
	setTimeout(function(){
		Travelog.markers[step + 1].setMap(Travelog.map);
	}, totalTime);

}

//Applies easeInOutCubic to the current time and returns the correct offset
Travelog.getAnimationOffset = function(time, beginning, change, duration){
	if ((time /= duration / 2) < 1) return change / 2 * time * time * time + beginning;
	return change / 2 * ((time -= 2) * time * time + 2) + beginning;
}

//Animates a line at Travelog.linePoints[step] from its start to its end. Uses getAnimationOffset for easing
Travelog.animateLine = function(step, time){

	var currentTime = 0, offsetLat = 0, offsetLng = 0, drawPoint = '', drawPath = [], intervalId = '';
	var startPoint = Travelog.linePoints[step].startPoint;
	var endPoint = Travelog.linePoints[step].endPoint;
	var distanceLat = endPoint.lat() - startPoint.lat();
	var distanceLng = endPoint.lng() - startPoint.lng();

	Travelog.lines.push(DrawableLine(Travelog.linePoints[step].startPath));

	//Use this if arrow disappears for all lines
	//Do this in animateLine
	// icons = Travelog.lines[step].get('icons');
	// icons[1].icon = new ArrowSymbol();
	// Travelog.lines[step].set('icons', icons);

	//Animate line
	//TODO: Rewrite so that I use setPath instead of icon offset to animate the line
	intervalId = setInterval(function(){

		//Workaround to prevent symbol flicker when adding the line with a length of zero - only add after first offset has been calculated
		if(currentTime === 10){
			Travelog.lines[step].setMap(Travelog.map);
		}

		if(currentTime <= time){
			//Apply easing function
			offsetLat = Travelog.getAnimationOffset(currentTime, startPoint.lat(), distanceLat, time);
			offsetLng = Travelog.getAnimationOffset(currentTime, startPoint.lng(), distanceLng, time);

			//Set up our line step
			drawPoint = new google.maps.LatLng(offsetLat, offsetLng);
			drawPath = [startPoint, drawPoint];

			Travelog.lines[step].setPath(drawPath);

			//Update time
			currentTime = currentTime + 10;
		} else {
			clearInterval(intervalId);
		}
	}, 10);
}

//Sets the appropriate bounds to scale our map
Travelog.scaleMap = function(){
	
	Travelog.bounds = new google.maps.LatLngBounds();
	Travelog.trip.spots.forEach(function(spot){
		Travelog.bounds.extend(spot.location);
	});

	Travelog.map.fitBounds(Travelog.bounds);
}

//Add all lines to the Travelog object
//The line has a dashed basic symbol and an arrow symbol
//Both should animate to the end of the line, pausing while markers get dropped in
Travelog.addLines = function(){
	var startPoint, endPoint;

  	//Gather our line points
	Travelog.linePoints = [];
	Travelog.lines = [];

	//Line points will be turned into animated google.maps.Polylines by the animateLine method
	for(i = 1; i < Travelog.trip.spots.length; i++){
		
		startPoint = Travelog.trip.spots[i - 1].location;
		endPoint = Travelog.trip.spots[i].location;
		
		Travelog.linePoints.push({
			startPath: [startPoint, startPoint],
			startPoint: startPoint,
			endPoint: endPoint
		});
	}
}



//Red arrow
function ArrowSymbol(){
	return {
		path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
		fillColor: '#F00',
		fillOpacity: 1,
		strokeWeight: 0,
		scale: 4
	}
}

//Dashed red line
function DashedLineSymbol(){
	return {
		path: 'M -1 2 L 1 2 L 1 6 L -1 6 z',
		fillColor: '#F00',
		fillOpacity: 1,
		strokeWeight: 0,
		scale: 2
	}
}

//Returns a new Polyline along the selected path
function DrawableLine(path){
	return new google.maps.Polyline({
		path: path,
		strokeOpacity: 0,
		icons: [
			{
				icon: new DashedLineSymbol(),
				repeat: '16px',
			},
			{
				icon: new ArrowSymbol(),
				offset: '100%'
			}
		]
	});
}

//Run the app
$(window).load(function(){
	Travelog.initialize();
});
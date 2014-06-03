@extends('layouts.main')

{{-- This template is for displaying trips. Trips contain a map, description, and spots. --}}

@section('title')
Take a Trip!
@stop

@section('page-styles')
	<link rel="stylesheet" type="text/css" href="/css/trip.css?version=<?php echo time(); ?>"/>
@stop

@section('page-content')
	@include('trip.sections.title')
	@include('trip.sections.map')
	@include('trip.sections.description')
	@include('trip.sections.spots')
	@include('trip.sections.overlays')
@stop

@section('page-scripts')
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1xmeAe6VWBiTFOcbbvU-o6qmC6YZADsA&libraries=places&sensor=false"></script>
	<script src="/js/trip-map.js"></script>
	<script src="/js/trip.js"></script>
@stop
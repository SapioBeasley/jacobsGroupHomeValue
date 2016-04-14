@extends('layouts.default')

@section('header')
<header id="header" class="tg-haslayout tg-inner-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="tg-navigationarea tg-haslayout">
					<strong class="logo">
						<a href="{{route('step1')}}"><img src="images/logo.png" alt="image description" style="height: 65px"></a>
					</strong>
					<nav id="tg-nav" class="tg-nav">
						<div class="collapse navbar-collapse" id="tg-navigation">
							<ul>
								<li><a href="index.html#" data-toggle="modal" data-target=".tg-user-modal"><small style="font-size: 70%;">Give us a Call</small><br>702-442-0055</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
@endsection

@section('content')
<!--************************************
Home Slider Start
*************************************-->
<div id="tg-innerbanner" class="tg-innerbanner tg-bglight tg-haslayout">
	<div class="tg-searcharea tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					@if (! Session::has('success_message'))
						<div class="alert alert-info">
							You are one step away from finding out the value of your property at {{$fullAddress}}
						</div>
					@else
						<div class="alert alert-success">
							{{Session::get('success_message')}}
						</div>
					@endif
				</div>
				@include('forms.refineSearchForm')
			</div>
		</div>
	</div>
	<div class="tg-pagebar tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Step 2</h1>
					<ol class="tg-breadcrumb">
						<li><a href="{{route('step1')}}">Home</a></li>
						<li class="active">Step 2</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<main id="main" class="tg-main-section tg-haslayout">
	<div class="tg-postionabsulote">
		<div class="col-md-5 col-sm-12 col-xs-12 tg-divheight pull-left">
			<div class="row tg-divheight">
				<div class="tg-mapbox">
					<div id="map_canvas" class="tg-location-map tg-haslayout"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12 pull-right">
				<div class="tg-contactus tg-haslayout">
					<div class="tg-refinesearcharea">
						<div class="tg-heading-border tg-small">
							<h2>Where should we send your Valuation?</h2>
						</div>
						@include('forms.contactForm')
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!--************************************
Main End
*************************************-->

@include('includes.footer')
@endsection

@section('mapScript')
<script type="text/javascript">
"use strict";
/* global document */
jQuery(document).ready(function () {
    /***
     Adding Google Map.
     ***/

    /* Calling goMap() function, initializing map and adding markers. */
    jQuery('#map_canvas').goMap({
        maptype: 'ROADMAP',
        latitude: {{$latLng['lat']}},
        longitude: {{$latLng['lng']}},
        zoom: 16,
        scaleControl: true,
        scrollwheel: false,
        markers: [
            {latitude: {{$latLng['lat']}}, longitude: {{$latLng['lng']}}, group: 'hospital', icon: 'images/map/02.png', html: {
                    content: 'Look! Your home!'
                }}
        ]

    });

    $.goMap.ready(function () {
        var bounds = $.goMap.getBounds();
        var southWest = bounds.getSouthWest();
        var northEast = bounds.getNorthEast();
        var lngSpan = northEast.lng() - southWest.lng();
        var latSpan = northEast.lat() - southWest.lat();

        var markers = [];

        for (var i in $.goMap.markers) {
            var temp = $($.goMap.mapId).data($.goMap.markers[i]);
            markers.push(temp);
        }

        var markerclusterer = new MarkerClusterer($.goMap.map, markers);

    });
});
</script>
@endsection


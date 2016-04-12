@extends('layouts.default')

@section('header')
<header id="header" class="tg-haslayout">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<strong class="logo">
					<a href="{{route('step1')}}"><img src="images/logo.png" alt="image description"></a>
				</strong>
				<nav id="tg-nav" class="tg-nav">
					<div class="collapse navbar-collapse" id="tg-navigation">
						<ul>
							<li><a href="index.html#" data-toggle="modal" data-target=".tg-user-modal">Give us a Call</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
@endsection

@section('content')
<div class="tg-homebanner tg-overflowhidden tg-haslayout">
	<div id="map_canvas" class="tg-location-map tg-haslayout"></div>
	<div class="tg-banner-content">
		<div class="tg-displaytable">
			<div class="tg-displaytablecell">
				<div class="container">
					<div class="col-md-9 col-sm-12 col-xs-12 col-md-offset-2">
						<div class="row">
							@include('forms.searchForm')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="show-search"><i class="fa fa-search"></i></div>
</div>

@include('includes.footer')
@endsection

@section('mapScript')
<script src="js/map/map.js"></script>
@endsection

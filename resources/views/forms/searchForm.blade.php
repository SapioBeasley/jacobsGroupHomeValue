{!! Form::open(['route' => 'step2', 'method' => 'GET', 'class' => 'form-searchdoctors']) !!}
	<fieldset>
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 tg-verticalmiddle">
				<div class="form-group">
					{!! Form::text('address', null, ['placeholder' => 'Address', 'class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Search', ['class' => 'search_banner tg-btn pull-right', 'style' => 'background-color: transparent;']) !!}
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 tg-verticalmiddle">
				<h1>GET YOUR<span>HOMES</span>VALUE<em>.</em></h1>
			</div>
		</div>
	</fieldset>
{!! Form::close() !!}

{!! Form::open(['route' => 'step2', 'method' => 'GET', 'class' => 'tg-searchform']) !!}
	<div class="col-md-10 col-sm-10 col-xs-12">
		<div class="form-group">
			{!! Form::text('address', null, ['placeholder' => 'Address', 'class' => 'form-control']) !!}
		</div>
	</div>
	<div class="col-md-2 col-sm-2 col-xs-4">
		<div class="form-group">
			{!! Form::submit('Search', ['class' => 'tg-btn tg-btn-lg', 'style' => 'background-color: transparent;']) !!}
		</div>
	</div>
{!! Form::close() !!}








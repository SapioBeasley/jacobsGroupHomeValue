{!! Form::open(['route' => 'contact.post', 'class' => 'form-refinesearch tg-haslayout']) !!}
	<fieldset>
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
				</div>

				<div class="form-group">
					{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
				</div>

				<div class="form-group">
					{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone']) !!}
				</div>

				<div class="form-group">
					<span class="select">
						{!! Form::select('timeframe', ['0' => 'Choose Your Timeframe', 'now' => 'I want to sell my home now', '3 months' => 'In the next 3 months', '12 months' => 'In the next 12 months', 'home value' => 'Just curious about my home value'], '0') !!}
						{!! Form::hidden('address', $fullAddress) !!}
					</span>
				</div>
			</div>
			<div class="col-sm-6">
				{!! Form::submit('Get your Valuation', ['class' => 'tg-btn', 'style' => 'background-color: transparent;']) !!}
			</div>
		</div>
	</fieldset>
{!! Form::close() !!}

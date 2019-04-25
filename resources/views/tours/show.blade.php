@extends('layout.master')


@section('content')


	<div class="container" style="padding-top: 2em; padding-bottom: 8rem;">
		<div class="columns">
			<div class="column is one-third">
				<figure style="margin-bottom: 1em;">
					<p class="image" style="width: 500px;">
	      				<img src="/storage/{{ $tour->image }}">
	    			</p>
	    			
				</figure>
				<h1 style="font-weight: bold; margin-bottom: 8px;">
					{{ $tour->title }}
					{{ $tour->number_of_days }} days and 1 Night

				</h1>
				<p style="margin-bottom: 8px;">
					from <span style="font-weight: bold;">${{ number_format($tour->amount / 100, 2) }}</span>
				</p>
				<span class="rating-static rating-35" style="margin-bottom: 1em;"></span>
				
				<a href="/checkout/{{ $tour->id }}" class="button is-primary">Book now</a>
				
			</div>
	
			<div class="column is-two-third">
				<div class="content">
					{!! $tour->description !!}
				</div>
			</div>
		</div>
	</div>
	
@stop


@push('beforeScript')

<script src="https://checkout.stripe.com/checkout.js"></script>

@endpush


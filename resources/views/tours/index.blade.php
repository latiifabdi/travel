@extends('layout.master')


@section('content')


	<div class="container" style="padding-top: 2em; padding-bottom: 8rem;">
		@if (session('orders'))
		    <div class="notification is-primary">
		        {{ session('orders') }}
		    </div>
		@endif

		<div class="my-8">
			<form method="GET" action="/search" class="control" style="display: flex; justify-content: center;">
  				<input class="input" style="width: 60%;" type="text" placeholder="search tours here" name="tours">
			</form>
		</div>

		<h1 style="text-align: center; margin-bottom: 2em; font-weight: bold;">All Tours</h1>
		@foreach($tours->chunk(3) as $toursCollection)
			<div class="columns">
				@foreach($toursCollection as $tour)
					<div class="column is-one-third">
						<div class="card tutor-card" style="cursor: pointer;">
							<a style="color: inherit;" href="/tours/{{ $tour->id }}">
								<div class="card-image" style="margin-bottom: 5px;">
									<figure class="image is-4by2">
		      							<img class="tutor-image" src="/storage/{{ $tour->image }}" alt="Placeholder image">
		    						</figure>
								</div>
								<div class="card-content">
									<h1 style="font-weight: bold; margin-bottom: 8px;">
										{{ $tour->title }}
										{{ $tour->number_of_days }} days <br>

									</h1>
									<p style="margin-bottom: 8px;">
										from <span style="font-weight: bold;">${{ number_format($tour->amount / 100, 2) }}</span>
									</p>


									<span class="rating-static rating-35 mb-4"></span>

									<p>
										<span class="font-bold"> {{ $tour->bookcount }}</span> booked the tour already
									</p>

								</div>
							</a>
							
							
						</div>
					</div>
				@endforeach
	  			
			</div>
		@endforeach
	</div>
@stop


@push('beforeScript')

<script src="https://checkout.stripe.com/checkout.js"></script>

@endpush


@extends('layout.master')


@section('content')

	<section class="hero" style="align-items: center;">
		<div class="hero-body">
			<img src="/images/resize.png" style="width: 1200px; height: 500px;">
		</div>
	</section>
	

	<div class="container pt-4" style="padding-top: 2em;">
		<h1 style="text-align: center; margin-bottom: 2em; font-weight: bold;">Popular Tours</h1>
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


									<span class="rating-static rating-35"></span>

								</div>
							</a>
							
							
						</div>
					</div>
				@endforeach
	  			
			</div>
		@endforeach


		<!-- new tours -->
		<h1 style="text-align: center; margin-bottom: 2em; font-weight: bold;">New Tours</h1>
		@foreach($newTours->chunk(3) as $toursCollection)
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


									<span class="rating-static rating-35"></span>

								</div>
							</a>
							
							
						</div>
					</div>
				@endforeach
	  			
			</div>
		@endforeach

	</div>

@stop
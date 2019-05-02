@extends('layout.master')


@section('content')

	<div class="carousel container" style="margin-top: 2em;">
		<div>
		    <img src="/carousel/1.jpeg" style="height: 500px; width: 1130px;">
		</div>

		<div>
		    <img src="/carousel/2.jpeg" style="height: 500px; width: 1130px;">
		</div>

		<div>
		    <img src="/carousel/3.jpeg" style="height: 500px; width: 1130px;">
		</div>
		<div>
		    <img src="/carousel/4.jpeg" style="height: 500px; width: 1130px;">
		</div>
	</div>

	<div class="container pt-4" style="padding-top: 2em;">
		<h1 id="populartours" style="text-align: center; margin-bottom: 2em; font-weight: bold;">Popular Tours</h1>
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
										<span class="font-bold"> 
											{{ $tour->bookcount }}
										</span> booked this tour already

									</p>

								</div>
							</a>
							
							
						</div>
					</div>
				@endforeach
	  			
			</div>
		@endforeach


		<!-- new tours -->
		<h1 id="newtours" style="text-align: center; margin-bottom: 2em; font-weight: bold;">New Tours</h1>
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


									<span class="rating-static rating-35 mb-2"></span>

									<p>
										<span class="font-bold"> {{ $tour->bookcount }}</span> booked this tour 
										@if ($tour->bookcount > 0) already @endif
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

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
<script>
 $(document).ready(function() {
 	console.log('hello world');
    $(".carousel").slick({
    	dots: true,
    	arrows: false,
	  	infinite: true,
	  	speed: 500,
	  	fade: true,
	  	cssEase: 'linear',
	  	autoplay: true,
    });
});
</script>

@endpush
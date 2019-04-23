@extends('layout.master')
@section('content')

<div class="container" style="padding-top: 2em; padding-bottom: 8rem;">
	<div class="columns" style="padding-top: 1em;">
		<div class="column is-three-quarter">
			<h1 style="font-weight: bold; margin-bottom: 1em; font-size: 24px;">Your Details</h1>
			<form class="form">
				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="Name">First name</label>
							<input type="text" class="input">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="Name">Last Name</label>
							<input type="text" class="input">
						</div>
					</div>
				</div>
				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="Name">Phone Number</label>
							<input type="text" class="input">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="Name">Email Address</label>
							<input type="email" class="input">
						</div>
					</div>
				</div>
				
				<h1 style="font-weight: bold; margin-bottom: 10px; font-size: 24px;">BIlling information</h1>

				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="address">Address</label>
							<input type="text" class="input" name="address">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="city">City</label>
							<input type="text" class="input" name="city">
						</div>
					</div>
				</div>

				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="state">state</label>
							<input type="text" class="input" name="state">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="code">Postal code</label>
							<input type="text" class="input" name="code">
						</div>
					</div>
				</div>

			</form>
		</div>

		<div class="column is-one-quarter">
			<div class="card">
				<div class="card-title" style="background: green; padding: 10px; color: white; border-radius: 5px;">
					<h1 style="text-align: center; text-transform: uppercase;">Package information</h1>
				</div>
				<div class="card-content">
					<h1 style="font-weight: bold; text-transform: uppercase; margin-bottom: 5px;">Location</h1>
					<p style="margin-bottom: 2em;">Destin Florida</p>

					<h1 style="text-transform: uppercase; font-weight: bold; margin-bottom: 5px;">Tour Dates</h1>
					<p>Check in in: 01, April 2019</p>
					<p style="margin-bottom: 2em;">Check out: 07, April, 2019</p>

					<h1 style="font-weight: bold; text-transform: uppercase; margin-bottom: 5px;">Guest</h1>
					<p>
						1 Adult (5)
						0 Children
					</p>
				</div>

				<div class="card-footer" style="padding: 10px; background: rgba(118, 190, 90, 0.1);">
					<div>
						<span>Total Amount:</span>
						<span>
							$55.00
						</span>
					</div>
					<checkout :tour="{{$tour}}"></checkout>
				</div>
			</div>
		</div>
		
	</div>
@stop

@push('beforeScript')

<script src="https://checkout.stripe.com/checkout.js"></script>

@endpush

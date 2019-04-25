<template>
	<div class="columns" style="padding-top: 1em;">
		<div class="column is-three-quarter">
			<h1 style="font-weight: bold; margin-bottom: 1em; font-size: 24px;">Your Details</h1>

			<form class="form">
				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="Name">First name</label>
							<input type="text" class="input" v-model="firstname">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="Name">Last Name</label>
							<input type="text" class="input" v-model="lastname">
						</div>
					</div>
				</div>
				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="Name">Phone Number</label>
							<input type="text" class="input" v-model="number">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="Name">Email Address</label>
							<input type="email" class="input" v-model="email">
						</div>
					</div>
				</div>
				
				<h1 style="font-weight: bold; margin-bottom: 10px; font-size: 24px;">BIlling information</h1>

				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="address">Address</label>
							<input type="text" class="input" v-model="address">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="city">City</label>
							<input type="text" class="input" v-model="city">
						</div>
					</div>
				</div>

				<div class="columns">
					<div class="column">
						<div class="field">
							<label class="label" for="state">state</label>
							<input type="text" class="input" v-model="state">
						</div>
					</div>
					<div class="column">
						<div class="field">
							<label class="label" for="zipcode">Postal code</label>
							<input type="text" class="input" v-model="zipcode">
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
					<p style="margin-bottom: 2em;">{{tour.address}}</p>

					<h1 style="text-transform: uppercase; font-weight: bold; margin-bottom: 5px;">Tour Dates</h1>
					<p>Check in in: 01, April 2019</p>
					<p style="margin-bottom: 2em;">Check out: 07, April, 2019</p>

					<h1 style="font-weight: bold; text-transform: uppercase; margin-bottom: 5px;">Guest</h1>
					<p>
						1 Adult (5)
						0 Children
					</p>
				</div>

				<div class="card-footer" style="padding: 10px; background: rgba(118, 190, 90, 0.1); display: block;">
					<div class="flex justify-between w-full">
						<p>Total Amount:</p>
						<p class="font-bold">
							${{ (tour.amount / 100).toFixed(2)}}
						</p>
					</div>
					<div class="block mt-6 text-center">
						<button  
							class="w-full rounded-full font-bold button is-primary" 
							v-bind:class="{ 'is-loading': loading }"
							@click.prevent="openStripe"
						>
							Book now
						</button>
					</div>
				</div>

			</div>
		</div>

	</div>
</template>

<script>
	export default {
		props: ['tour'],

		data() {
			return {
				loading: false,
				firstname: '',
				lastname: '',
				number: '',
				email: '',
				city: '',
				address: '',
				state: '',
				zipcode: '',
				stripeToken: '',
				stripeEmail: '',

			}
		},

		created() {
			this.stripe = StripeCheckout.configure({
			  key: 'pk_test_X28Nwy6MIrcwhW61kRy9aEye',
			  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
			  locale: 'auto',
			  token: token => {
			  	this.stripeToken = token.id;
			  	this.stripeEmail = token.email;

			  	this.submit()
			  }
			});

			window.addEventListener('popstate', function() {
  				this.stripe.close();
			});
		},

		methods: {
			openStripe() {
				this.stripe.open({
					name: this.tour.title,
    				description: '2 widgets',
    				amount: this.tour.amount,
    				email: this.email
				})
			},

			submit() {
				this.loading = true;

				axios.post("/charge", {
					firstname: this.firstname,
					lastname: this.lastname,
					phoneNumber: this.number,
					city: this.city,
					address: this.address,
					zipcode: this.zipcode,
					stripeEmail: this.stripeEmail,
					token: this.stripeToken,
					tour: this.tour.id,
				}).then(response => {
					this.loading = false;
					window.location.href = "/orders/" + response.data.id;
					console.log(response.data)
				}).catch(error => {
					this.loading = false;
					console.log(error);
				})
			}
		}
	};
</script>
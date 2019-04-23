<template>
	<button class="button is-primary" @click.prevent="openStripe">
		Book now
	</button>
</template>

<script>
	export default {
		props: ['tour'],

		data() {
			return {
				stripeToken: '',
				stripeEmail: '',
			}
		},

		created() {
			console.log(StripeCheckout);
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
    				amount: this.tour.amount
				})
			},

			submit() {
				axios.post("/charge", {
					stripeEmail: this.stripeEmail,
					token: this.stripeToken,
					tour: this.tour.id,
				}).then(response => {
					console.log(response.data)
				}).catch(error => {
					console.log(error);
				})
			}
		}
	};

</script>


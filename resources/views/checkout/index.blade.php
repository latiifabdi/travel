@extends('layout.master')
@section('content')

<div class="container" style="padding-top: 2em; padding-bottom: 8rem;">
	<checkout-form :tour="{{ $tour }}"></checkout-form>
</div>
@stop

@push('beforeScript')

<script src="https://checkout.stripe.com/checkout.js"></script>

@endpush

@extends('layout.master')

@section('content')

<section class="bg-grey-lighter" style="min-height: 150vh;">

    <div class="container mx-auto max-w-lg">
        <div class="pt-12">
            <div class="flex justify-between">
                <h1 class="font-normal">Order Summery</h1>
                <a href="#">#010292929290</a>
            </div>
            <div class="py-6 border-b">
                <p class="#">
                    <strong>Order Total: ${{ number_format($order->amount) }}</strong>
                </p>
                <p class="text-grey">Billed to Card #: **** **** ****  424242</p>
            </div>
            <div class="mt-6">
                <h2 class="text-lg font-normal mb-4">Your Tour</h2>
                <div class="w-3/4 bg-white rounded-lg">
                    <div class="bg-grey-darkest text-white p-4">
                        <div class="flex justify-between">
                            <div class="#">
                                <h3 class="mb-2">{{$order->tour->title}}</h3>
                                <p class="text-grey">
                                    {{ $order->tour->number_of_days }} Days and {{$order->tour->duration}}
                                </p>
                            </div>

                            <div>
                                <p class="mb-2">${{ number_format($order->tour->amount / 100, 2) }}</p>
                                <p class="text-white opacity-75">
                                    Language: {{ $order->tour->language }}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="py-8 px-6 border-b">
                        <div class="flex justify-between">
                            <div>
                                <p class="font-bold">
                                    {{ $order->created_at->format('l, F d, Y') }}
                                </p>
                                {{-- <p class="font-bold">Sunday, october 16, 2011</p> --}}
                                <p class="text-grey">
                                    {{ $order->created_at->format('g:ia') }}
                                </p>
                            </div>
                            <div>
                                <p class="font-bold">{{$order->tour->address}}</p>
                                <p class="text-grey">
                                    123 min road luxia road shima
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="footer-custom py-8 bg-white px-6">
                        <div class="flex justify-between">
                            <p class="font-bold">DKTJVUA</p>
                            <form action="/orders/{{ $order->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="help font-bold  is-danger">
                                    Cancel booking
                                </button>
                            </form>
                            
                            <p class="text-sm">
                                {{$order->email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12">
            @if ($order->customer)
                <h1 class="mb-3">Contact Detail</h1>
               <table class="table">
                    <thead>
                        <tr>
                            <th>First Name:</th>
                            <th>Last Name:</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>City</th>

                            @if ($order->customer->travel_date )
                                <th>Date Travel</th>
                            @endif
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $order->customer->firstname }}</td>
                            <td>{{ $order->customer->lastname }}</td>
                            <td>{{ $order->customer->email }}</td>
                            <td>{{ $order->customer->address }}</td>
                            <td>{{ $order->customer->phoneNumber }}</td>
                            <td>{{ $order->customer->city }}</td>
                             <td>{{ $order->customer->travel_date }}</td>
                        </tr>
                    </tbody>
               </table>
            @endif
        </div>
    </div>
</section>



@stop


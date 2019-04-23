<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
	
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="/css/rating.css">
    </head>

    <style>
        .flex {
            display: flex;
            justify-content: space-between;

        }

        .link {
            color: black;
            margin-right: 18px;
            text-transform: uppercase;

        }
    </style>
    <body>

        <header class="container" style="padding-top: 2em;">
            <div class="flex">
                <div>
                    <h2>
                        <a href="/"  style="color: inherit;">Tours</a>
                    </h2>
                </div>
                <ul class="flex">
                    <li>
                        <a href="/tours" style="color: black;" class="link">Tours</a>
                    </li>
                    <li>
                        <a href="/tours" style="color: black;" class="link">popular Tours</a>
                    </li>
                    <li>
                        <a href="/tours" style="color: black;" class="link">New Tours</a>
                    </li>
                    {{-- <li>
                        <a href="/categories/1" class="link">Men</a>
                    </li>
                    <li>
                        <a href="/categories/2" class="link">Women</a>
                    </li>
                    <li>
                        <a href="/categories/4" class="link">Shoes</a>
                    </li>
                    <li>
                        <a href="/categories/5" class="link">Bags</a>
                    </li>
                    <li>
                        <a href="/categories/3" class="link">Electronics</a>
                    </li> --}}
                </ul>
            </div>
        </header>
		
		<div id="app">
        	@yield('content')
        </div>

        <footer class="footer" style="margin-top: 3em;">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 style="color: grey; margin-bottom: 8px;">Tours</h2>
                       {{--  <ul>
                            <li style="margin-bottom: 10px;">
                                <a href="/products" style="color: black; text-transform: uppercase;">Shop</a>
                            </li>

                            <li style="margin-bottom: 10px;">
                                <a href="/categories/1" style="color: black; text-transform: uppercase;">Men</a>
                            </li>
                            
                            <li style="margin-bottom: 10px;">
                                <a href="/categories/2r" style="color: black; text-transform: uppercase;">Women</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="/categories/5" style="color: black; text-transform: uppercase;">Bags</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="/categories/4" style="color: black; text-transform: uppercase;">Shoes</a>
                            </li>
                            <li>
                                <a href="/categories/3" style="color: black; text-transform: uppercase;">Electronics</a>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="column">
                        <h2 style="color: grey; margin-bottom: 8px;">QUICK LINKS</h2>
                        <ul>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">About Us</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">Our Policy</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">Contact Us</a>
                            </li>
                    
                        </ul>
                    </div>
                    <div class="column">
                        <h2 style="color: grey; margin-bottom: 8px;">CONNECT WITH US</h2>
                        <ul>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">Twitter</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">Facebook</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">Snapchat</a>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <a href="#" style="color: black; text-transform: uppercase;">Whatsapp</a>
                            </li>
                            <li>
                                <a href="#" style="color: black; text-transform: uppercase;">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
       </footer>
        

      @stack('beforeScript')

      <script src="/js/app.js"></script>




    </body>
</html>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>African Travel Tour</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
	   <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="/css/rating.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

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

        .slick-dots {
            margin-top: 1em;
            display: flex;
            justify-content: space-evenly;
        }
        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: black;
        }

        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 6px;
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            content: '•';
            text-align: center;
            opacity: .25;
            color: black;
            -webkit-font-smoothing: antialiased;

        }

    </style>
    <body>

        <header class="container" style="padding-top: 2em;">
            <div class="flex">
                <div>
                    <h2>
                        <a href="/"  style="color: inherit; font-weight: bold;">African Travel Tour</a>
                    </h2>
                </div>
                <ul class="flex">
                    <li>
                        <a href="/tours" style="color: black;" class="link">Tours</a>
                    </li>
                    <li>
                        <a href="/#populartours" style="color: black;" class="link">popular Tours</a>
                    </li>
                    <li>
                        <a href="/#newtours" style="color: black;" class="link">New Tours</a>
                    </li>
                
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
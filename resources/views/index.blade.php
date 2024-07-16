<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>THRIFTYTRADE | Home Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    </head>

    
    <style>

        .text-danger{color:#dc3545!important}.text-light{color:#f8f9fa!important}
        .small,small{font-size:.575em}
                
        .popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                z-index: 1000;
            }
            .popup-content {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                max-width: 400px;
                width: 100%;
            }
            .close-button {
                float: right;
                font-size: 1.5rem;
                cursor: pointer;
            }
            .alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-left:3rem}.alert-dismissible .btn-close{position:absolute;top:0;left:0;z-index:2;padding:1.25rem 1rem}.alert-primary{color:#084298;background-color:#cfe2ff;border-color:#b6d4fe}.alert-primary .alert-link{color:#06357a}.alert-secondary{color:#41464b;background-color:#e2e3e5;border-color:#d3d6d8}.alert-secondary .alert-link{color:#34383c}.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc}.alert-success .alert-link{color:#0c4128}.alert-info{color:#055160;background-color:#cff4fc;border-color:#b6effb}.alert-info .alert-link{color:#04414d}.alert-warning{color:#664d03;background-color:#fff3cd;border-color:#ffecb5}.alert-warning .alert-link{color:#523e02}.alert-danger{color:#842029;background-color:#f8d7da;border-color:#f5c2c7}.alert-danger .alert-link{color:#6a1a21}.alert-light{color:#636464;background-color:#fefefe;border-color:#fdfdfe}.alert-light .alert-link{color:#4f5050}.alert-dark{color:#141619;background-color:#d3d3d4;border-color:#bcbebf}.alert-dark .alert-link{color:#101214}

        </style>
    <body>

        <header class="with-background">
            <div class="top-nav container">
                <div class="logo"><img src="/img/logo_pc.png" style="max-width: ;width: 35vh" alt=""></div> 
                <ul>
                    <li><a href="/products">PRODUCTS</a></li>
                    <li><a href="/car">CART <span class="cart-count"><span>3</span></span></a></li>  
                    
                    @if (auth()->check()) 
                    <li class="nav-item"> <a class="nav-link" href="/profile">
                        <span class="text">{{ auth()->user()->type }}</span> </a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">
                            <i class="fas fa-sign-out-alt icon"></i><span class="text">Logout</span></a></li>  
                        @endif

                        @if(!auth()->check())
                            <li class="nav-item"><a class="button button-white" href="/login" id="login-button">
                                <span class="text">Login</span></a></li>
                            @endif
            
                </ul>
            </div> <!-- end top-nav -->



            <div class="hero container">
                <div class="hero-copy">
                    <h1>Welcome to <span style="font-weight: bold; font-style:italic">WINDBREAKER</h1>
                    <p>Thrift for a Quality Jackets, WindBreakers, Sweaters, and Many more!<br><span style="font-weight: bold">Thrift Quality Jackets!</p>
                    <div class="hero-buttons">

                        <a href="/products" id="shop-now-button" class="button button-white">Shop Now!</a>
                    </div>
           
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/img-logos.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">FEATURED PRODUCTS</h1>

                <p class="section-description"> Discover our exclusive selection of featured wind-breaker jackets! with the best in quality and value. Shop now and take advantage of these outstanding deals before they're gone!
               </p>

                <div class="text-center button-container">
                    <a href="/products" class="button">Featured</a>
                    <a href="/products" class="button">On Sale</a>
                </div>
`

                {{-- <div class="products text-center">
                    @foreach ($products as $product)
                    <div class="product">
                        <a href="/products/{{ $product->id }}"><img src="{{ $product->product_image }}" alt="/img/noimg.png">
                        <a href="/products/{{ $product->id }}"><div class="product-name">{{ $product->product_name }}</div></a>
                        <div class="product-price">₱{{ $product->product_price }}</div>
                    </div>
                    @endforeach
                </div> <!-- end products --> --}}

                <div class="products text-center">
                    {{-- @foreach ($products as $product) --}}
                    <div class="product">
                        <a href="/products"><img src="" alt="/img/noimg.png">
                        <a href="/products/"><div class="product-name">TEST PRODUCT</div></a>
                        <div class="product-price">₱69</div>
                    </div>
                    {{-- @endforeach --}}
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="/products" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        @include('components.footer')

        {{-- <script>
            document.getElementById('login-button').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('login-popup').style.display = 'flex';
            });

            document.getElementById('close-popup').addEventListener('click', function() {
                document.getElementById('login-popup').style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target == document.getElementById('login-popup')) {
                    document.getElementById('login-popup').style.display = 'none';
                }
            });

            document.getElementById('shop-now-button').addEventListener('click', function(event) {
            @if (!auth()->check())
            event.preventDefault();
            document.getElementById('login-popup').style.display = 'flex';
            @else
            window.location.href = "/products";
            @endif
            });
            
            @if (session('error'))
                document.getElementById('login-popup').style.display = 'flex';
            @endif

        </script> --}}

    </body>
</html>

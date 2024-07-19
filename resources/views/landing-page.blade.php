    <style>
        .navbar-brand {
            font-weight: bold;
            color: #4267B2 !important;
        }

        .btn-new-listing {
            background-color: #42b72a;
            color: white;
        }

        .sidebar {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .item-card {
            transition: transform 0.3s ease;
        }

        .item-card:hover {
            transform: translateY(-5px);
        }

        .item-image {
            height: 200px;
            object-fit: cover;
        }

        .item-title {
            font-weight: bold;
        }

        .item-price {
            color: #4267B2;
            font-weight: 500;
        }

        .auth-prompt {
            background-color: #e9ecef;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .hero-section {
            background: linear-gradient(rgba(11, 66, 177, 0.8), rgba(66, 103, 178, 0.9)), url('secondhand-banner.jpg');
            background-size: cover;
            color: white;
            padding: 50px 0;
            margin-bottom: 15px;
        }
    </style>

    </head>

    <body>

        @extends('layouts.app')
        @section('title', 'THRIFTYTRADE | WELCOME')
        @include('navbar.nav-noauth')
        @include('components.hero-section')

        {{-- SIDE-BAR --}}
        @section('content')

            <div class="container mt-4">
                @include('components.sidebar-noauth')
                @include('contents')

                <!-- CONTENT -->
                {{-- <div class="col-lg-9">
                    <main>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            <div class="col">
                                <div class="card h-100 item-card">
                                    <img src="https://placehold.co/400x400" alt="Vintage Lamp" class="card-img-top item-image">
                                    <div class="card-body">
                                        <h5 class="card-title item-title">Vintage Lamp</h5>
                                        <p class="card-text item-price">$45</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 item-card">
                                    <img src="https://placehold.co/400x400" alt="Mountain Bike"
                                        class="card-img-top item-image">
                                    <div class="card-body">
                                        <h5 class="card-title item-title">Mountain Bike</h5>
                                        <p class="card-text item-price">$120</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 item-card">
                                    <img src="https://placehold.co/400x400" alt="Wooden Bookshelf"
                                        class="card-img-top item-image">
                                    <div class="card-body">
                                        <h5 class="card-title item-title">Wooden Bookshelf</h5>
                                        <p class="card-text item-price">$80</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 item-card">
                                    <img src="https://placehold.co/400x400" alt="Acoustic Guitar"
                                        class="card-img-top item-image">
                                    <div class="card-body">
                                        <h5 class="card-title item-title">Acoustic Guitar</h5>
                                        <p class="card-text item-price">$150</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 item-card">
                                    <img src="https://placehold.co/400x400" alt="Coffee Maker"
                                        class="card-img-top item-image">
                                    <div class="card-body">
                                        <h5 class="card-title item-title">Coffee Maker</h5>
                                        <p class="card-text item-price">$35</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 item-card">
                                    <img src="https://placehold.co/400x400" alt="Indoor Plant"
                                        class="card-img-top item-image">
                                    <div class="card-body">
                                        <h5 class="card-title item-title">Indoor Plant</h5>
                                        <p class="card-text item-price">$25</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main> --}}
                <!-- END OF CONTENT -->

                @include('components.howitworks')
            </div>
            </div>
        @endsection

        <script>
            // JavaScript for enhancing user interaction
            document.querySelectorAll('.item-card').forEach(card => {
                card.addEventListener('click', function() {
                    const itemTitle = this.querySelector('.item-title').textContent;
                    alert('Please login or register to view details for ' + itemTitle);
                });
            });
        </script>
    </body>

    </html>

<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThriftyTrade Marketplace</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


<style>
    .profile-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .profile-header {
        background-color: #007bff;
        color: white;
        padding: 20px;
        text-align: center;
    }

    .profile-header img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        object-fit: cover;
    }

    .profile-header h2 {
        margin: 10px 0 0;
        font-size: 20px;
    }

    .profile-header p {
        margin: 5px 0 0;
        font-size: 14px;
    }

    .profile-actions a {
        display: block;
        padding: 10px;
        margin: 5px 0;
        border: 2px solid transparent;
        border-radius: 5px;
        text-decoration: none;
        color: #007bff;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .profile-actions a:hover {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card img {
        border-radius: 10px 10px 0 0;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }

    .card-body p {
        margin: 5px 0;
        font-size: 14px;
    }

    .search-card {
        background-color: #007bff;
        border-radius: 10px;
        padding: 20px;
        color: white;
        margin-bottom: 20px;
    }

    .search-card input {
        border-radius: 10px;
        border: none;
        padding: 10px;
    }

    .navbar-nav {
        flex-direction: row;
    }

    .nav-item {
        padding: 0 10px;
        position: relative;
    }

    .nav-item .nav-link {
        padding: 0;
    }

    .nav-item .nav-link::after {
        content: "";
        display: block;
        width: 0;
        height: 2px;
        background: #007bff;
        transition: width .3s;
        position: absolute;
        bottom: -5px;
        left: 0;
    }

    .nav-item .nav-link:hover::after {
        width: 100%;
    }

    .profile-img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .navbar {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #f8f9fa;
        box-shadow: 0 4px 2px -2px rgba(0,0,0,.2);
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        color: #007bff;
    }

    .btn-primary {
        padding: 10px 20px;
    }
</style>

</head>

<body>
    @include('components.navbar')
    <br>
    <div class="container-fluid">
        <div class="row">
            @include('components.sidebar')
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selectedOption = null;

            document.querySelectorAll('.listing-option').forEach(function (card) {
                card.addEventListener('click', function () {
                    document.querySelectorAll('.listing-option').forEach(function (c) {
                        c.classList.remove('selected');
                    });
                    card.classList.add('selected');
                    selectedOption = card.id;

                    document.getElementById('continue-btn-container').style.display = 'block';

                    // Change the color of the selling sidebar card
                    document.querySelectorAll('.profile-actions a').forEach(function (link) {
                        link.classList.remove('selected');
                    });
                    document.querySelector('.profile-actions .selling').classList.add('selected');
                });
            });

            document.querySelectorAll('.profile-actions a').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelectorAll('.profile-actions a').forEach(function (l) {
                        l.classList.remove('selected');
                    });
                    link.classList.add('selected');

                    if (link.classList.contains('buying')) {
                        document.getElementById('additional-buttons').style.display = 'block';
                        document.getElementById('filters').style.display = 'none';
                        document.getElementById('seller-buttons').style.display = 'none';
                        window.location.href = '/buyer_dashboard';
                    } else {
                        document.getElementById('additional-buttons').style.display = 'none';
                        document.getElementById('filters').style.display = 'block';
                        document.getElementById('seller-buttons').style.display = 'block';
                        window.location.href = '/seller_dashboard';
                    }
                });
            });

            document.getElementById('continue-btn').addEventListener('click', function () {
                if (selectedOption) {
                    window.location.href = selectedOption === 'single-listing' ? '/newlisting' : '/commissionlisting';
                }
            });

            // Seller sidebar buttons functionality
            document.getElementById('seller-dashboard').addEventListener('click', function (e) {
                e.preventDefault();
                window.location.href = '/seller_dashboard';
            });

            document.getElementById('my-listings').addEventListener('click', function (e) {
                e.preventDefault();
                window.location.href = '/mylistings';
            });
        });
    </script>
    @yield('scripts')

</body>
</html>
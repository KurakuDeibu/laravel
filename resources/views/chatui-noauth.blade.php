<html>

<head>
    <title>ThriftyTrade - Local Secondhand Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }

        .messages-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }

        .login-prompt {
            text-align: center;
            padding: 2rem;
            background-color: #e9ecef;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    @include('navbar.nav-noauth')

    <!-- CONTENT -->

    <!-- SIDE-BAR -->

    <div class="container">
        <div class="messages-container">
            <h2 class="mb-4">Messages</h2>
            <div class="login-prompt">
                <h4>Please log in to view your messages</h4>
                <p>You need to be logged in to access your messages and communicate with other users.</p>
                <a href="/login" class="btn btn-primary">Login</a>
                <p class="mt-3">Don't have an account? <a href="/register">Register here</a></p>
            </div>
        </div>


    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

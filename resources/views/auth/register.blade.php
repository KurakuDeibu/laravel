    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            color: #4267B2 !important;
        }

        .form-container {
            max-width: 500px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-register {
            background-color: #4267B2;
            border-color: #4267b2;
        }

        .btn-register:hover {
            background-color: #365899;
            border-color: #365899;
        }
    </style>

    @extends('layouts.app')
    @section('title', 'Register')
    @include('navbar.nav-noauth')

    @section('content')
    {{-- CONTENT --}}
    <div class="container">
        <div class="form-container row">
            <div class="col-12">
                <!-- Addan logo or nahh uh -->
                <h2 class="text-center mb-4">Join <b>ThriftyTrade</b></h2>
                <form action="/register" method="POST">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required="">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required="">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                            required="">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required="">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsAgree" required="">
                        <label class="form-check-label" for="termsAgree">I agree to the <a href="/terms">Terms of
                                Service</a> and <a href="/privacy">Privacy Policy</a></label>
                    </div>
                    <button type="submit" class="btn btn-register btn-primary w-100">Create Account</button>
                </form>
                <p class="text-center mt-3">Already have an account? <a href="/login">Log in</a></p>
            </div>
        </div>
    </div>
    
    @endsection

  <style>
      body {
          background-color: #f8f9fa;
          min-height: 100vh;
          display: flex;
          flex-direction: column;
      }

      .navbar-brand {
          font-weight: bold;
          color: #4267B2 !important;
      }

      .login-container {
          flex: 1;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 2rem;
      }

      .login-form {
          width: 100%;
          max-width: 400px;
          padding: 2rem;
          background-color: white;
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .btn-login {
          background-color: #4267B2;
          border-color: #4267B2;
      }

      .btn-login:hover {
          background-color: #365899;
          border-color: #365899;
      }
  </style>

  @extends('layouts.app')
  @section('title', 'Login')
  @include('navbar.nav-noauth')

  @section('content')

      <div class="login-container">
          <div class="login-form">

              {{-- EMAIL POST --}}
              <form action="{{ route('auth.login') }}" method="POST">
                  @csrf

                  @if (session('error'))
                      <div class="alert alert-danger text-center">
                          {{ session('error') }}
                      </div>
                  {{-- @elseif (session('logout'))
                      <div class="alert alert-success text-center">
                          {{ session('logout') }}
                      </div> --}}
                  @endif

                  <div class="mb-3">
                      <label for="userEmail" class="form-label">Email address</label>
                      <input type="text" class="form-control {{ $errors->has('userEmail') ? 'is-invalid' : '' }}"
                          id="userEmail" name="userEmail" value="{{ old('userEmail') }}" placeholder="Email">
                          <small class="text-danger">{{ $errors->first('userEmail') }}</small>
                  </div>

                  {{-- END OF EMAIL --}}


                  {{-- PASSWORD --}}
                  <div class="mb-3">
                      <label for="userPassword" class="form-label">Password</label>
                      <input type="password" class="form-control {{ $errors->has('userPassword') ? 'is-invalid' : '' }}"
                          id="userPassword" name="userPassword" placeholder="Password">
                          <small class="text-danger">{{ $errors->first('userPassword') }}</small>
                  </div>

                  <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>

                  <button type="submit" class="btn btn-login btn-primary w-100">Log In</button>
              </form>

              <div class="text-center mt-3">
                  <a href="/forgot-password">Forgot password?</a>
              </div>
              <hr>

              <p class="text-center">Don't have an account? <a href="/register">Sign up</a></p>
          </div>
      </div>
  @endsection

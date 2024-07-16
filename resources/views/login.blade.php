   {{-- LOGIN BOX --}}
   <div class="popup" id="login-popup">
    <div class="popup-content">
        <span class="close-button" id="close-popup">&times;</span>
        <h4 class="card-title text-center mb-4">LOGIN FIRST BEFORE SHOPPING!</h4>
        <div class="cart-title text-center mb-4"><img src="/img/logo_pc.png" style="max-width: ;width: 35vh" alt=""></div> 
       
        <form action="/login" method="post">
            @csrf
            @if (session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @elseif (session('logout'))
                <div class="alert alert-success text-center">
                    {{ session('logout') }}
                </div>
            @endif
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="Password">
                <small class="text-danger">{{ $errors->first('password') }}</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>
        <p class="text-center mt-4">
            <span>Don't have an account?</span>
            <a href="/register" class="font-weight-bold">Sign up here</a>
        </p>
    </div>
</div>
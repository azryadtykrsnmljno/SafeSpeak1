@extends('layout.loginregister')
@section('title', 'Sign In')

@section('content')
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="assets/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="register" class="signup-image-link">Don't have an account?</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign In</h2>
                    <form method="POST" action="{{ route('loginPost') }}" class="register-form" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="your_email"><i class="zmdi zmdi-account material-icons-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email Address @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                        </div>

                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>

                        <div>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

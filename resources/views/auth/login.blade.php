@extends('layout.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('main/css/auth.css') }}">
@endsection
@section('content')
    <section class="auth-section">
        <div class="container">
            <div class="auth-container">
                <div class="auth-image">
                    <img src="https://images.pexels.com/photos/1216589/pexels-photo-1216589.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Construction Site">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h2>Welcome Back</h2>
                            <p>Log in to access your project information, track progress, and communicate with our team.</p>
                        </div>
                    </div>
                </div>
                <div class="auth-form">
                    <div class="form-header">
                        <h2>Login to Your Account</h2>
                        <p>Enter your credentials to access your account</p>
                    </div>
                    <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <div class="input-with-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder="Your email address"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="password" name="password" placeholder="Your password" required>
                                <button type="button" class="toggle-password" aria-label="Toggle password visibility">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-options">
                            <div class="remember-me">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Remember me</label>
                            </div>
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Log In</button>

                        <div class="auth-redirect">
                            <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

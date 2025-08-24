@extends('layout.layout')
@section('style')
    <link rel="stylesheet" href="{{ asset('main/css/auth.css') }}">
@endsection
@section('content')
    <section class="auth-section">
        <div class="container">
            <div class="auth-container">
                <div class="auth-image">
                    <img src="https://images.pexels.com/photos/2760241/pexels-photo-2760241.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Construction Team">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h2>Join Swat Construction Company</h2>
                            <p>Create an account to request quotes, track projects, and communicate directly with our team.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="auth-form">
                    <div class="form-header">
                        <h2>Create Your Account</h2>
                        <p>Fill in your details to get started</p>
                    </div>
                    <form id="signup-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="first-name">Name</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="first-name" name="name" placeholder="Your first name"
                                        required>
                                </div>
                            </div>

                        </div>
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
                                <input type="password" id="password" name="password" placeholder="Create a password"
                                    required>
                                <button type="button" class="toggle-password" aria-label="Toggle password visibility">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="confirm-password" name="password_confirmation"
                                    placeholder="Confirm your password" required>
                                <button type="button" class="toggle-password" aria-label="Toggle password visibility">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a
                                    href="#">Privacy
                                    Policy</a></label>
                        </div>
                        <div class="form-group checkbox-group">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="newsletter">I want to receive updates about projects, promotions, and news</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>

                        <div class="auth-redirect">
                            <p>Already have an account? <a href="{{ asset('login') }}">Log In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

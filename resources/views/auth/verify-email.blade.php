@extends('layouts.auth.template')

@section('title')
    Verify Email
@endsection

@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We explore the new <br>life much better</h1>
                <img src="{{ url('frontend/images/login-images.png') }}" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{ url('/') }}" class="navbar-brand">
                                <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4">
                            </a>
                        </div>
                        <p class="login-card-description">Thanks for signing up! Before getting started, 
                            could you verify your email address by clicking on the link we just emailed to you? 
                            If you didn\'t receive the email, we will gladly send you another.</p>

                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <input name="login" id="login" class="btn btn-login btn-block" type="submit" value="Resend Verification Email">
                            <p class="login-card-footer-text mt-5">
                                <a href="{{ route('logout') }}" class="text-reset">Logout</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('layouts.auth.template')

@section('title')
    Forgot Password
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
                            <img src="{{ url('frontend/images/logo.png') }}" alt="" class="w-50 mb-4">
                        </div>
                        <p class="login-card-description">Forgot your password? No problem. 
                            Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.request') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input  type="email" name="email" id="email" class="form-control is-invalid" placeholder="Email Address">
                                @error('email')
                                    <span class="invalid-feedback is-invalid" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input name="reset" id="reset" class="btn btn-login btn-block" type="submit" value="Email Password Reset Link">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection




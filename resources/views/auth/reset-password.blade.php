@extends('layouts.auth.template')

@section('title')
    Reset Password
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
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input  type="email" name="email" id="" class="form-control is-invalid" value="{{ $request->email }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback is-invalid" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password" >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="sr-only">Password</label>
                                <input type="password" name="password_confirmation" id="password-confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                            <input name="reset" id="reset" class="btn btn-login btn-block" type="submit" value="Update Password">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection




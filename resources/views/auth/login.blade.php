@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4 text-center">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <hr>
            <div class="text-center mb-2">Or login with</div>
            <div class="d-flex justify-content-center gap-2">
                {{-- <a href="{{ route('social.login', 'facebook') }}" class="btn btn-outline-primary">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="{{ route('social.login', 'instagram') }}" class="btn btn-outline-danger">
                    <i class="fab fa-instagram"></i> Instagram
                </a> --}}
                <a href="{{ route('social.login', 'google') }}" class="btn btn-outline-success">
                    <i class="fab fa-google"></i> Google
                </a>
                <a href="{{ route('social.login', 'discord') }}" class="btn btn-outline-success">
                    <i class="fab fa-google"></i> Discord
                </a>
                <a href="{{ route('social.login', 'github') }}" class="btn btn-outline-success">
                    <i class="fab fa-google"></i> Github
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

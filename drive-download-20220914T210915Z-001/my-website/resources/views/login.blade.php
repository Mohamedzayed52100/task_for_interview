@extends('main-template')

@section('main')
<h1>Login</h1>
<div class="row">
    <div class="image">
        <img src="/images/login.png" alt="">
    </div>
    <div class="loginForm">
        <form method="post" action="/login">
            @csrf
            <div class="form-field">
                <label for="email">Email:</label>
                <input required type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="form-field">
                <label for="password">Password:</label>
                <input required type="password" name="password" id="password">
                @error('password') <p class="error">{{ $message }}</p> @enderror
                @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
            </div>
            <input class="btn btn-primary btn-big" type="submit" value="Login">
            <p>Don't have an account? <a href="/register">Sign up</a></p>
        </form>
    </div>
</div>
@endsection
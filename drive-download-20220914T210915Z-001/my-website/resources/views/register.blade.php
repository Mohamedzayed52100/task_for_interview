@extends('main-template')

@section('main')
<div class="registerh1">
    <h1>Sign Up</h1>
</div>
<div class="row">
    <div class="image">
        <img src="/images/register.jpg" alt="">
    </div>
    <div class="registerform">
        <form method="post" action="/register">
            @csrf
            <div class="form-field">
                @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
                <label for="name">Name:</label>
                <input required type="text" name="name" id="name" value="{{ old('name') }}">
                @error('name') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="form-field">
                <label for="email">Email:</label>
                <input required type="email" name="email" id="email" value="{{ old('email') }}">
                @error('email') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="form-field">
                <label for="password">Password:</label>
                <input required type="password" name="password" id="password">
                @error('password') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="form-field">
                <label for="password-confirmation">Password Confirmation:</label>
                <input required type="password" name="password_confirmation" id="password-confirmation">
            </div>
            <input class="btn btn-primary btn-big" type="submit" value="Sign Up">
            <p>Already have an account? <a href="/login">Login</a></p>
        </form>
    </div>
</div>
@endsection
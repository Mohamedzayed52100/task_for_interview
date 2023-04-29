<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/alpha.jpg">
    <title>Alpha Health Care</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="" class="logo"> <i class="fas fa-heartbeat"></i>Alpha Health Care</a></li>
            <li class="align-right"><a @class(['active'=>Request::is('adminLogin')]) href="/adminLogin">Admin Login</a></li>
            <li><a @class(['active'=>Request::is('website')]) href="/">Menu</a></li>
        </ul>
    </nav>


    <main>
        <div class="AdminLogin">
            <h1>Welcome back , Admin</h1>
            <div class="row">
                <div class="loginForm">
                    <form method="post" action="/adminLogin">
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
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; 2022, Alpha Health Care, All rights reserved</p>
    </footer>
    <style>
        .main {
            height: auto;
        }
    </style>


</body>

</html>
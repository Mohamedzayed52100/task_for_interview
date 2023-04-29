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
    @yield('css')

</head>

<body>

    <!-- Nav bar -->
    @include('navbar')

    <!-- Main content -->
    <main>
        @yield('main')
    </main>

    <!-- Footer -->
    <footer>
        <p>Copyright &copy; 2022, Alpha Health Care, All rights reserved</p>
    </footer>

</body>

</html>
@if(session('loggedIn'))
    <!-- Nav bar for logged in user -->
    <nav>
        <ul>
            <li><a href="/"class="logo"> <i class="fas fa-heartbeat"></i>Alpha Health Care</a></li>
            <li><a @class(['active'=>Request::is('homewebsite')]) href="/homewebsite">Home</a></li>
            <li class="align-right"><a @class(['active'=>Request::is('appointment')]) href="/appointment">Appointment</a></li>
            <li><a @class(['active'=>Request::is('showVaccine')]) href="/showVaccine">Vaccine</a></li>
            <li><a @class(['active'=>Request::is('upload')]) href="/upload">Upload</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>
    </nav>
@else 
    <!-- Nav bar for guest -->
    <nav>
        <ul>  
        <li><a href="/website" class="logo"> <i class="fas fa-heartbeat"></i>Alpha Health Care</a></li>
            <li class="align-right"><a @class(['active'=>Request::is('login')]) href="/login">Login</a></li>
            <li><a @class(['active'=>Request::is('register')]) href="/register">Sign Up</a></li>
            <li><a @class(['active'=>Request::is('website')]) href="/">Menu</a></li>
        </ul>
    </nav>
@endif


<link rel="stylesheet" href="/css/vaccinestyle.css">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<title>Register Vaccine </title>
<link rel="icon" href="/images/alpha.jpg">

<header class="ccheader">
    <h1><b>Register an account in the Registration System for COVID-19 Vaccine</b></h1>
</header>

<div class="wrapper">
    <form method="post" action="/registerVaccine" class="ccform">
    @csrf
    @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
    <div class="ccfield-prepend">
    <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
    <input class="ccformfield"  type="text" name="name" id="name" value="{{session('userName')}}"  readonly>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" type="text" name="email" id ="email" value="{{session('userEmail')}}" readonly>
        
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone*">
        @error('phone') <p class="error">{{ $message }}</p> @enderror
    </div>
     
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-flag-o fa-2x"></i></span>
        <input class="ccformfield" type="text" name="nationality" value="{{ old('nationality') }}" placeholder="Nationality*" >
        @error('nationality') <p class="error">{{ $message }}</p> @enderror
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-book fa-2x" aria-hidden="true"></i></span>
        <input class="ccformfield" type="text" name="nationalID" value="{{ old('nationalID') }}" placeholder="National ID Number*" >
        @error('nationalID') <p class="error">{{ $message }}</p> @enderror
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-calendar fa-2x"></i></span>
        <input class="ccformfield" type="text" name="birthdate" value="{{ old('birthdate') }}" placeholder="Birthdate*" >
        @error('birthdate') <p class="error">{{ $message }}</p> @enderror
    </div class="ccfield-prepend">

    <div class="ccfield-prepend">
        <select class="main-input icon-input ng-pristine ng-invalid txtRequired ng-touched" name="language" required=""><option disabled="" selected="" value="0: undefined"> -- Language of communication* -- </option>
        <option value="Arabic" class="ng-star-inserted"> Arabic </option>
        <option value="English" class="ng-star-inserted"> English </option></select>
        @error('language') <p class="error">{{ $message }}</p> @enderror
    </div>
    <div class="ccfield-prepend">
        <select class="main-input icon-input ng-pristine ng-invalid txtRequired ng-touched" name="gender" required=""><option disabled="" selected="" value="0: undefined"> -- Gender -- </option>
        <option value="F" class="ng-star-inserted"> Female </option>
        <option value="M" class="ng-star-inserted"> Male </option></select>
        @error('gender') <p class="error">{{ $message }}</p> @enderror
    </div>
    <div class="ccfield-prepend">
        <select class="main-input icon-input ng-pristine ng-invalid txtRequired ng-touched" name="ladies" required="">
        <option disabled="" selected="" value="0: undefined"> -- Ladies Only, are you pregnant? -- </option>
        <option value="Y" class="ng-star-inserted"> Yes </option>
        <option value="N" class="ng-star-inserted"> No </option>
        <option value="Planing" class="ng-star-inserted"> Planning to be pregnant </option>
        <option value="Unspecified" class="ng-star-inserted"> Unspecified </option>
        @error('ladies') <p class="error">{{ $message }}</p> @enderror
    </select>
    </div>

    <input class="btn btn-primary btn-big"  type="submit" value="Register">

   
  

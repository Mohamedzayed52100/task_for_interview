@extends('main-template')

@section('css')
<link rel="stylesheet" href="/css/style.css">
<!-- bootstrap.min css -->
<link rel="stylesheet" href="/css/bootstrap.min.css">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="/css/style_me.css">
@endsection


@section('main')

@if(session('success_message'))
<p class="success">{{ session('success_message') }}</p>
@endif

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block d-lg-flex">
                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <img src="/appoint_images/clock.png" width="30%">
                        </div>
                        <span>Timing schedule</span>
                        <h4 class="mb-3">Working Hours</h4>
                        <ul class="w-hours list-unstyled">
                            <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 19:00</span></li>
                            <li class="d-flex justify-content-between">Thu - Fri : <span>8:00 - 19:00</span></li>
                            <li class="d-flex justify-content-between">Sat - sun : <span>8:00 - 19:00</span></li>
                        </ul>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <img src="/appoint_images/calender.png" width="31%">
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Online Appoinment</h4>
                        <p class="mb-4">Book your appointment now with ease in fast steps cause we care about your
                            comfort and happiness.</p>
                        <a href="/appointment" class="btn btn-main btn-round-full">Make appoinment</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <img src="/appoint_images/covid-icon.jpg" width="140px">
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Vaccine</h4>
                        <p>Now with us you can easily book an appointment for taking COVID-19 vaccine immediately.</p>
                        <a href="/showVaccine" class="btn btn-main btn-round-full">Take vaccine</a>
                    </div>

                    <div class="feature-item mb-5 mb-lg-0">
                        <div class="feature-icon mb-4">
                            <img src="/images/4228684.png" width="30%">
                        </div>
                        <span>24 Hours Service</span>
                        <h4 class="mb-3">Radiology</h4>
                        <p class="mb-4">Upload your radiology test now and check your result in few steps with us everything is in your hands.</p>
                        <a href="/upload" class="btn btn-main btn-round-full">Radiology Upload</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
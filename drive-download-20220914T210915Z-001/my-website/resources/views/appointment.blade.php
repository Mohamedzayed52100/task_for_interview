@extends('main-template')

@section('css')

<!-- Main Stylesheet -->
<link rel="stylesheet" href="/css/style_me.css">
@endsection

@section('main')

<div id="container">
	<!--This is a division tag for body container-->
	<div id="body_header">
		<!--This is a division tag for body header-->
		<h1>Appointment Request Form</h1>
		<img src="/appoint_images/img6.jpg" alt="schedule-img">
		<style>
			img {
				position: relative;
				margin-top: 70px;
				margin-left: 50px;
				width: 500px;
				height: 400px;
				border-radius: 50px;
			}
		</style>
	</div>
	<form method="post" action="/appointment">
		@csrf
		<fieldset>
			<legend>Appointment Details</legend>
			@if(session('error')) <p class="error">{{ session('error') }}</p> @endif
			<label for="appointment_for">Specialization *:</label>
			<select id="appointment_for" name="appointment_for" required value="{{ old('appointment_for') }}">
				<option value="Cardiology">Cardiology</option>
				<option value="Pediatrics">Pediatrics</option>
				<option value="Dental">Dental Medicine</option>
				<option value="Surgery">Surgery</option>
				<option value="Orthopedics">Orthopedics</option>
				<option value="Ophthalmology">Ophthalmology</option>
				<option value="Obestetrics">Obestetrics</option>
				@error('appointment_for') <p class="error">{{ $message }}</p> @enderror
			</select>

			<label for="appointment_description">Appointment Description:</label>
			<textarea id="appointment_description" name="appointment_description" placeholder="Type your notes here ....">{{ old('appointment_description') }}</textarea>
			@error('appointment_description') <p class="error">{{ $message }}</p> @enderror
			<label for="date">Date *:</label>
			<input type="date" name="date" required value="{{ old('date') }}"></input>
			@error('date') <p class="error">{{ $message }}</p> @enderror
			<br>

			<label for="time">Time *:</label>
			<input type="time" name="time" required min="08:00" max="19:00" value="{{ old('time') }}"></input>
			@error('time') <p class="error">Appointment is taken by another user change date or time please @enderror</p>

			<br>

		</fieldset>
		<button name="submit" class="btn btn-main btn-round" style="text-decoration:none">submit</button>
		<a href="/home" class="btn btn-main btn-round" style="text-decoration:none">Back</a>
	</form>

</div>

@endsection


<link rel="stylesheet" href="/css/vaccinestyle.css">
<title> Vaccine </title>
<link rel="icon" href="/images/alpha.jpg">

@include('navbar')
<div class="container">
  <h1>Registration for COVID-19 Vaccine </h1>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col "><b>Please read the following instructions:</b></div>
      
    </li>
    <li class="table-row">
      <div class="col " data-label="inst1">This service will enable you to register with the MOPH your interest to take the Covid-19 vaccine, and if you are in one of the first priority groups, enable you to request an appointment to take the vaccine.</div>
      
    <li class="table-row">
      <div class="col " data-label="inst2">Even if you are not in one of the listed priority groups, your interest to take the vaccine will be recorded and saved by the MOPH, and you will be contacted when you are eligible.</div>
    </li>
    <li class="table-row">
      <div class="col " data-label="inst3">In order to use this service, you will need to login using your National Authentication System (NAS) TAWTHEEQ username and password</div>
    </li>
    <li class="table-row">
      <div class="col " data-label="inst4">NAS account is not needed for the 12-18 years old child category</div>
    </li>
  </ul>
</div>
<div class="vaccinebtns">
    <li class="list-group-item text-center">
        <input  class="btn2 btn2-primary btn2-big" onclick="window.location.href='/registerVaccine'" type="submit"  value="To register for a vaccine appointment ">
        
    </li>
</div>

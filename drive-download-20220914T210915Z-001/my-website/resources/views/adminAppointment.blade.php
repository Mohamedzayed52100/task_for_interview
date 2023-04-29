<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/images/admin.jpg">
<link rel="stylesheet" href="/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/bootstrap.min.css">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="/css/font-awesome.min.css">

<!-- Feathericon CSS -->
<link rel="stylesheet" href="/css/feathericon.min.css">

<link rel="stylesheet" href="/plugins/morris/morris.css">
<!-- custom css file link  -->
<link rel="stylesheet" href="/css/styleDashboard.css">
<title>Admin Appointments</title>
<!-- Recent Orders -->
<div class="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <!-- Recent Orders -->
            <div class="card card-table">
                <div class="card-header">
                    <h4 class="card-title">Appointment List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Speciality</th>

                                    <th>Apointment Time</th>
                                    <th>Appointment Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                 <!-- @foreach($AppointmentAdmin as $key => $AppointmentAdmin)
                                <tr>
                                    <th scope="row">{{ $AppointmentAdmin->name }}</th>
                                    <td>{{$AppointmentAdmin->appointment_for }}</td>
                                    <td>{{$AppointmentAdmin->time}}</td>
                                    <td>{{$AppointmentAdmin->date }}</td>
                                    
                                </tr>
                                @endforeach  -->

                                <!-- <tr>


                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="/images/patients/patient5.jpg" alt="User Image"></a>
                                            <a href="profile.html"></a>
                                        </h2>
                                    </td>
                                    <td></td>
                                    <td> <span class="text-primary d-block"></span></td>


                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Recent Orders -->


        </div>
    </div>
</div>
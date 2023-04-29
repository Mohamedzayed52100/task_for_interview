<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\AlphaMail;
use Illuminate\Support\Facades\Mail;


class AppointmentController extends Controller
{
    public function showHomewebsite()
    {
        return view('homewebsite');
    }

    public function showAppointment()
    {
        return view('appointment');
    }

    public function showConfirmation()
    {
        return view('confirmation');
    }


    public function appointment(Request $request)
    {

        // validation
        $request->validate([
            'appointment_for' => 'required',
            'appointment_description' => 'max:150',
            'date' => 'required|after_or_equal:today',
            'time' => 'required|unique:appointment,time,NULL,id,date,' . $request->date,

        ]);

        // store data in database
        $appointment_for = $request->appointment_for;
        $appointment_description = $request->appointment_description;
        $date = $request->date;
        $time = $request->time;
        DB::insert('insert into appointment(appointment_for, appointment_description, date, time,patient_id) values(?, ?, ?, ?, ?)', [$appointment_for, $appointment_description, $date, $time , session('userId') ]);


        // mark if user has appointment
        $appointmentId = DB::getPdo()->lastInsertId();
        $result = DB::select('select appointment_id, appointment_for, date, time from appointment where appointment_id = ?', [$appointmentId]);
        $appointment = null;
        if ($result) {
            $appointment = $result[0];
        }
        if($appointment == null){
            return back()->with(['error' => 'Unexpected error happened during Appointment booking'])->withInput();
        }
        session()->regenerate();
        session([
            'hasAppointment' => true,
            'appointmentId' => $appointmentId,
            'appointment' => $appointment
        ]);
        Mail::to('rawansaeed108@gmail.com')->send(new AlphaMail( $date));

        // go to confirmation
        return redirect('/confirmation');
    }
    public function AdminAppointment()
    {

        // mark if user has appointment
       // $result = DB::select('select * from appointment ');
        
        $AppointmentAdmin = DB::table('appointment')
        ->join('patient','patient.patient_id','=','appointment.patient_id')
        ->select('patient.name','appointment.appointment_for','appointment.date','appointment.time')
        ->get();

        return view ('adminAppointment', compact('AppointmentAdmin'));

       
    }
}

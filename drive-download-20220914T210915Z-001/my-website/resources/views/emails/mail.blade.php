@component('mail::message')
# Alpha Health Care Center

Thank you for your interest in Alpha Health Care .<br>
We appreciate the time you took to apply for an appointment in Alpha and we look forward to see you in our Health Care Center.<br>
Your Appointment Date is {{$msg}}<br>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/website'])
Visit Us 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

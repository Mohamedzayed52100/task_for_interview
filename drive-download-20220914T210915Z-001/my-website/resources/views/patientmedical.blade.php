<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Patient </title>
    <link rel="stylesheet" href="font-awesome.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/admin.jpg">



    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        input,
        select {
            border-radius: 10px;
        }

        .parsley-errors-list li {
            list-style: none;
            color: red;
        }

        .father {
            display: flex;
            /* justify-content:space-around; */

        }

        .cardbody1 {
            width: 65%;
            margin-top: 15px;


        }

        .cardbody2 {
            width: 35%;
            background-color: #f4f4f4;


        }

        .cardbody1 input,
        .cardbody2 input {
            margin-top: 15px;
        }

        /* .submit{
        position: absolute;
        right:25px;
        bottom:25;

    } */
        .cardbody1 label {
            margin-left: 15px;

        }

        .sixparent {
            display: flex;


        }

        .sixparent input {
            display: block;


        }

        .six {
            /* float: left; */

            width: 150px !important;
            margin-left: 10px;


        }

        .three input {
            display: block;
            margin-left: 20px;

            width: 250px !important;


        }

        .three {
            margin: 20px;
            display: flex;

        }

        .two {
            display: flex;

        }

        .two textarea {
            width: 400px;
            height:70px;
            border-radius: 10px;




        }

        div input,
        div select {
            /* height:25px */
            padding: 5px;

        }

        /*  */
        .cardbody2 input {
            background-color: #fff;
        }

        .cardbody2 input,
        .cardbody2 select {
            display: block;



        }

        .cardbody2>div {
            /* display:grid; */
            /* grid-auto-columns: repeat(2, auto); */

            margin: 27px 10px 10px 10px;









        }

        .allofthem {
            background-color: #0e6453;
            padding: 10px;
        }

        .allofthem input {
            padding: 10px;
            display: inline-block;
            width: 500px;


        }

        .allofthem a {
            text-decoration: none;
            background-color: #fff;
            padding: 8px;
            border-radius: 20%;






        }

        .allofthem .one {
            margin-left: 50px;


        }

        footer {
            position: relative;
            padding: 7px;

            top: 60px;


            background-color: #ececec;

        }

        .submit,
        .btn {
            display: inline-block;
            padding: 7px;
            background-color: #222533;
            color: #fff;
            position: relative;
            width: 80px;
            left: 1310px;
            cursor: pointer;



        }
    </style>
</head>

<body>


    <header class="allofthem" style="background-color: #0897f4;">
        <input type="text" placeholder=" Search Here">
        <a class="one"href="/getpinfo">new patient</a>
        <a style="position: absolute ; top: 8px ; right:50px;" href="/outpatienthome">
            exit
        </a>



    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">


                    {{-- action="{{ route('register.new') }}" --}}
                    <form action="/patientmedicalsubmit" method="POST" id="register">
                        @csrf
                        <div class="father">


                            <div class="cardbody1">
                                <div class="sixparent">
                                    <div>
                                        <label for="title">Height</label>
                                        <br>
                                        <input type="text" class="six" name="height" value="{{old('height')}}" id="height">
                                    </div>
                                    <div>
                                        <label for="body">Weight</label>
                                        <br>
                                        <input type="text" name="weight"  value="{{old('weight')}}" id="weight" class="six">
                                    </div>
                                    <div>
                                        <label for="body">BP</label>
                                        <br>
                                        <input type="text" name="bp" value="{{old('bp')}}"  id="bp" class="six">
                                    </div>
                                    <div>
                                        <label for="body">Pulse</label>
                                        <br>
                                        <input type="text" name="pulse"  value="{{old('height')}}" id="pulse" class="six">
                                    </div>
                                    <div>
                                        <label for="body">Temperature</label>
                                        <br>
                                        <input type="text" name="temperature"  value="{{old('temperature')}}"  id="temperature" class="six">
                                    </div>
                                    <div>
                                        <label for="body">Respiration</label>
                                        <br>
                                        <input type="text" name="respiration"  value="{{old('respiration')}}" id="respiration" class="six">
                                    </div>
                                </div>
                                <div class="three">
                                    <div class="form-group" style="width:25% ;!important">
                                        <label for="body">Symptoms Type</label>
                                        <br>
                                        <br>

                                        <select style="width:230px;" name="symptomstype">
                                            <option value="select" selected>select</option>
                                        </select>
                                    </div>



                                    <div>
                                        <label for="body">Symptoms Title </label>
                                        <br>
                                        <input type="text" name="symptomstitle"  value="{{old('symptomstitle')}}" id="symptomstitle"
                                            class="form-control">
                                    </div>
                                    <div>
                                        <label for="body">Symptoms Description</label>
                                        <br>
                                        <input type="text" name="symptomsdescription" value="{{old('symptomsdescription')}}" id="symptomsdescription"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" style="position: absolute; left:850px; top:150px; " >
                                    <label for="patientid">patient id</label>
                                    <br>
                                    <br>

                                    <select name="patientid" >
                                        @foreach ($pid as $key =>$value )
                                        <option value="{{$value->id}}" >{{$value->id}}</option>
                                            
                                        @endforeach
                                    
                                    </select>
                                </div>

                                <div class="two" style="margin-left: 30px;">


                                    <div>
                                        <label for="body">Note </label>
                                        <br>

                                        <textarea name="note" class="note" value="{{old('note')}}"  row="40" columns="20"></textarea>
                                    </div>

                                    <div style="margin-left: 40px">
                                        <label for="body">Any Known Allergies</label>
                                        <br>

                                        <textarea class="anyknownallergies" name="anyknownallergies" value="{{old('anyknownallergies')}}" row="40" columns="20"></textarea>

                                    </div>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h4>{{session('numbermust')}}</h4>
                            </div>

                            <div class="cardbody2">
                                <div class="toto" style="display:flex;">
                                    <div style="width:200px;">
                                        <label for="body">Casualty</label>
                                        <br>

                                        <select name="casualty" class="casualty" style="width:200px">
                                            <option value="yes" selected>Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div style="width:200px; ;margin-left:30px;">
                                        <label style="margin-left:30px;" for="body">Old Patient </label>
                                        <br>

                                        <select class="oldpatient" name="oldpatient"
                                            style="width:200px;margin-left:30px;">
                                            <option value="yes" selected>Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toto" style="display:flex;">
                                    <div>
                                        <label for="body">TPA</label>
                                        <br>
                                        <select class="tpa" name="tpa" style="width:200px">
                                            <option value="select" selected>select</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label style="margin-left:60px;" for="body">Consultant Doctor</label>
                                        <br>

                                        <select class="consultantdoctor" name="consultantdoctor"
                                            style="width:200px;margin-left:60px;">
                                            <option value="select" selected>select</option>
                                            <option value="mohamed">Mohamed Zayed </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="toto" style="display:flex;">
                                    <div>
                                        <label for="body">Payment Mode</label>
                                        <br>

                                        <select class="paymentmode" name="paymentmode" style="width:200px">
                                            <option value="cash" selected>Cash</option>
                                            <option value="cheque" selected>Cheque</option>
                                            <option value="upi" selected>Upi</option>
                                            <option value="other" selected>others</option>
                                            <option value="bank" selected>Transfer to bank account</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label style="margin-left:60px;" for="body">Live Consultation</label>
                                        <br>

                                        <select class="liveconsultation" name="liveconsultation"
                                            style="width:200px;margin-left:60px;">
                                            <option value="yes" selected>Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                <label for="body">Symptoms Type</label>

                                <select>
                                    <option value="select" selected>select</option>
                                </select>
                            </div> --}}
                                <div class="toto" style="display:flex;">
                                    <div class="form-group">
                                        <label for="body">Appointment Date </label>
                                        <br>
                                        <input style="width:200px" type="datetime-local" name="appointmentdate" value="{{old('appointmentdate')}}"  id="appointment" class="appointmentdate">
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-left:60px;" for="body">Case</label>
                                        <input style="width:200px;margin-left:60px;" type="text" name="case" value="{{old('case')}}"
                                            id="case" class="form-control">
                                    </div>
                                </div>
                                <div class="toto" style="display:flex;">
                                    <div class="form-group">
                                        <label for="body">Reference </label>
                                        <br>
                                        <input style="width:200px" type="text" name="reference" id="reference"  value="{{old('reference')}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Tax</label>
                                        <br>
                                        <input type="text" style="width:200px;margin-left:60px;" name="tax" value="{{old('tax')}}" id="tax" class="tax" disabled>
                                    </div>
                                </div>
                                <div class="toto" style="display:flex;">
                                    <div class="form-group">
                                        <label for="body">Standard Charge </label>
                                        <br>
                                        <input type="text" style="width:200px" name="standardcharge" value="{{old('standardcharge')}}"  id="standardcharge" class="standardcharge" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-left:60px;" for="body">Applied Charge </label>
                                        <br>
                                        <input type="text" style="width:200px;margin-left:60px;" name="appliedcharge" id="appliedcharge" value="{{old('appliedcharge')}}" class="appliedcharge">
                                    </div>
                                </div>
                                <div class="toto" style="display:flex;">
                                    <div class="form-group">
                                        <label for="body">Amount </label>
                                        <br>
                                        <input type="text" style="width:200px" name="amount"  value="{{old('amount')}}" id="amount"
                                            class="amount">
                                    </div>
                                    <div class="form-group">
                                        <label style="margin-left:60px;" for="body">Paid Amount </label>
                                        <br>
                                        <input type="text" style="width:200px ;margin-left:60px;" value="{{old('paidamount')}}"
                                            name="paidamount" id="paidamount" class="paidamount">
                                    </div>
                                </div>
                                {{-- <div   style="width:200px; margin-left:15px"> --}}



                            </div>
                        </div>
                        <footer>

                            <button type="submit" class="submit">Submit</button>
                            <button class="btn">print</button>

                        </footer>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#register").parsley();
        })
    </script>
</body>

</html>

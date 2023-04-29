<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #eee;
        }

        .container {
            width: 1200px;
            margin: 0 auto;
        }

        p {
            text-align: justify;
            font-size: 19px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>

    {{-- <div class="container"> --}}
    {{-- <img  style="width:300px; height: 300px;" src="{{ asset('image') }}/{{ $d->doc_image }}" class="card-img-top" alt="..."> --}}




    <div class="container">

        <div style="margin-top:60px;">

            <h1>Personal Information</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Marital Status</th>
                        <th scope="col">phone</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>

                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <th scope="row">{{session('data')[0]->name}}</th>
                        <td>{{session('data')[0]->dateofbirth}}</td>
                        <td>{{session('data')[0]->bloodgroup }}</td>
                        <td>{{session('data')[0]->maritalstatus}}</td>
                        <th>{{session('data')[0]->phone}}</th>
                        <td>{{session('data')[0]->email}}</td>
                        <td>{{session('data')[0]->address }}</td>

                    </tr>

                </tbody>
            </table>
        </div>



        <div style="margin-top:150px;">
            <h1>Medical Information</h1>


            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">height</th>
                        <th scope="col">weight</th>
                        <th scope="col">bp</th>
                        <th scope="col">pulse</th>
                        <th scope="col">temperature</th>
                        <th scope="col">respiration</th>
                        <th scope="col">symptomstype</th>
                        <th scope="col">symptomstitle</th>
                        <th scope="col">appointmentdate</th>
                    </tr>
                </thead>
                <tbody>



                    <tr>

                        <td>{{session('data')[0]->height}}</td>
                        <td>{{session('data')[0]->weight}}</td>
                        <td>{{session('data')[0]->bp }}</td>
                        <td>{{session('data')[0]->pulse}}</td>
                        <td>{{session('data')[0]->temperature }}</td>
                        <td>{{session('data')[0]->respiration}}</td>
                        <td>{{session('data')[0]->symptomstype}}</td>
                        <td>{{session('data')[0]->symptomstitle }}</td>
                        <td>{{session('data')[0]->appointmentdate}}</td>
                    </tr>

                </tbody>
            </table>
        </div>



        {{--
    <h2>name : {{session('data')[0]->name}}</h2>
        <h4>guardian name : {{session('data')[0]->guardian_name}}</h4>
        <h4>date of birth : {{session('data')[0]->dateofbirth}}</h4>
        <h4>blood group : {{session('data')[0]->bloodgroup }}</h4>
        <h4>marital status : {{session('data')[0]->maritalstatus}}</h4>
        <h4>phone : {{session('data')[0]->phone}}</h4>
        <h4>email : {{session('data')[0]->email}}</h4>
        <h4>address : {{session('data')[0]->address}}</h4>
        <h4>height : {{session('data')[0]->height}}</h4>
        <h4>weight : {{session('data')[0]->weight}}</h4>
        <h4>bp : {{session('data')[0]->bp}}</h4>
        <h4>pulse : {{session('data')[0]->pulse}}</h4>
        <h4>temperature : {{session('data')[0]->temperature}}</h4>
        <h4>respiration : {{session('data')[0]->respiration}}</h4>
        <h4>symptoms type : {{session('data')[0]->symptomstype}}</h4>
        <h4>symptoms title : {{session('data')[0]->symptomstitle}}</h4>
        <h4>appointment date : {{session('data')[0]->appointmentdate}}</h4> --}}

        <button style="margin: 30px 0  0 500px;" type="button" id="btn" class="btn btn-primary">Print</button>

        {{-- <button  class ="btn">Print</button> --}}

        {{-- </div> --}}

    </div>
</body>
<script>
    var zayed = document.getElementById('btn');
    zayed.onclick = function() {
        window.print();
    }
</script>

</html>
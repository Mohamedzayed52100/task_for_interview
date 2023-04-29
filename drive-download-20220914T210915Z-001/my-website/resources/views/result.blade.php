<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/images/radio.jpg">
        <title> Radiology Results </title>
        <link rel="stylesheet" href="/css/styleResult.css" >
        <!-- font awesome cdn link  -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
    
    </head>
    <body>
       @include('navbar')
       <!-- Reault section starts  -->

<section class="result" id="Reault">

    <h1 class="heading"> <span>Radiology</span> Results </h1>

    <div class="row">

        <div class="image">
            <img src="/images/corona.jpeg" alt="">
        </div>

        <div class="content">
            <h3>Your Radiology Result is <div class ="radioresult">{{session('result')}}</div></h3>
            <p>

                <ul>
                    <li>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</li>
                    <li>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</li>
                    <li>Avoid close contact (1 meter or 3 feet) with people who are unwell</li>
                    <li>Stay home and self-isolate from others in the household if you feel unwell</li>
                </ul>
            </p>
           
        </div>

    </div>

</section>

<!-- about section ends -->

    <footer class="footerResult">
        <p>Copyright &copy; 2022, Alpha Health Care, All rights reserved</p>
    </footer>
</body>
</html>
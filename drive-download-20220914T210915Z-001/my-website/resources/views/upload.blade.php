<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/images/radio.jpg">
  <link rel="stylesheet" href="/css/styleUpload.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>Upload Now</title>
</head>

<body>
  @include('navbar')

  @if(session('error')) <p class="error">{{ session('error') }}</p> @endif
  <main>
    <form action="/upload" method="POST" enctype="multipart/form-data">
      @csrf
      <input required type="file" name="file" accept=".jpg,.jpeg,.png">
      <p>Drag your images here or click in this area.</p>
      <img src="/images/upload3.svg" alt="radiology-img" />
      <button type="upload-img" >Upload</button>
    </form>
  </main>
  <!--------footer--------->


  <footer class="footer">
    <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
      <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
    </svg>
    <div class="footer-content">
      <div class="footer-content-column">
        <div class="footer-message">
          <p>Thank you for visiting us!</p>
        </div>
      </div>
    </div>


  </footer>


</body>


</html>
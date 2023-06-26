<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> BEAUTY CENTER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
     <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <!-- <link rel="stylesheet" type="text/css" href="resources/css/home.css"> -->


</head>
<body class="hold-transition sidebar-mini">
  <!-- nav bar -->
<section class="NavBar" dir="rtl">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="logo" src="{{asset('images/staticimg/logo.png')}}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" dir="rtl">
        <ul class="navbar-nav  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}" >الصفحة الرئيسية</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>
<section class="details pt-5 mt-5 mb-5 pb-5" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-3 ">
            <img width="500" class="imgDetails"  src="{{asset('images/posts/'.$post->image)}} "/>
            </div>
            <div class="row col-md-6 mb-3 col-12 d-flex justify-content-center align-content-center" >
                <h1>
                {{$post->title}}</td>
                </h1>
                <p>
                 <span class="product">السعر: </span> {{$post["price"]}}دولار    
                </p>
                <p>
                <td> {{$post["description"]}}</td>   
                </p>
            </div>
        </div>
    </div>
</section>

<section class="contactSection pt-4 mb-3 mt-5" dir="rtl">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <p class="titleContact">اكتب استفسارك الآن</p>
        <div class="col-12 message">
          <form>
            <div class="mb-3 p-5 d-flex justify-content-center">
              <textarea class="form-control textArea" id="inputText" rows="4" placeholder="رسالتك"></textarea>
            </div>
            <button type="button" class="btn m-2 Mybtn" onclick="sendMessage()">إرسال</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- end third section -->

<!-- footer -->
<!-- Remove the container if you want to extend the Footer to full width. -->

  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>

</footer>





  <script>
    function sendMessage() {
      var inputText = document.getElementById("inputText").value;
      var phoneNumber = "201002147118"; // رقم الواتساب في مصر
      var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(inputText);
      window.open(whatsappURL, "_blank");
    }
  </script>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> 


<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

</body>
</html>



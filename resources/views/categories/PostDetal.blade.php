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
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300&family=Cairo&family=Caveat&family=IBM+Plex+Sans+Arabic:wght@500&family=Noto+Sans+Arabic:wght@400;900&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
     <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> -->
  <!-- Font Awesome Icons -->
  

  <!-- <link rel="stylesheet" type="text/css" href="resources/css/home.css"> -->

  <link 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
  rel="stylesheet" 
/> 
<!-- Google Fonts --> 
<link 
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" 
  rel="stylesheet" 
/> 
<!-- MDB --> 
<link 
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" 
  rel="stylesheet" 
/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body class="hold-transition sidebar-mini">
  <!-- nav bar -->
<section class="NavBar" dir="rtl">
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="logo" src="{{asset('images/staticimg/logo.png')}}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" dir="rtl">
      <div class= "col-10 d-flex justify-content-center">
        <ul class="navbar-nav Links  mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('home')}}" >الصفحة الرئيسية</a>
          </li>
        </ul>
       </div>
      </div>
    </div>
  </nav>
</section>
<!-- <section class="details pt-5 mt-5 mb-5 pb-5" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-3" data-aos="fade-left"
                  data-aos-anchor="#example-anchor"
                  data-aos-offset="500"
                  data-aos-duration="500">
            <img  class="imgDetails"  src="{{asset('images/posts/'.$post->image)}} "/>
            </div>
            <div class="row col-md-6 mb-3 col-12 d-flex  align-content-center"data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine" >
                <h1>
                {{$post->title}}</td>
                </h1>
               
                <p> {{$post["description"]}}</p>   
                <p class="salary">
                  {{$post["price"]}}شيقل   
                </p>
                <form>

                <button type="button" class="btn m-2 Mybtn" onclick="sendMessage()">احجزي الأن</button>

               </form>
            </div>
        </div>
    </div>
</section> -->

<section class="details pt-5 mt-5 mb-5 pb-5" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-3" data-aos="fade-left"
                  data-aos-anchor="#example-anchor"
                  data-aos-offset="500"
                  data-aos-duration="500">
                <img  class="imgDetails"  src="{{asset('images/posts/'.$post->image)}}"/>
            </div>
            <div class="row col-md-6 mb-3 col-12 d-flex  align-content-center" data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                @if($post->category == "makeup") <!-- Display only title and description for "makeup" category -->
                    <h1>{{$post->title}}</h1>
                    <h1>{{$post->price}}</h1>
                @else
                <div class="row">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post["description"]}}</p>
                    <p class="salary">{{$post["price"]}}شيقل </p>
                    </div>
                    @endif
                    
                    <form>
                        <button type="button" class="btn m-2 Mybtn" onclick="sendMessage()">احجزي الأن</button>
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
      <a class="btn btn-outline-light btn-floating m-1" href=" https://linktr.ee/faihamekup?utm_source=linktree_profile_share" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/fihaaakary?igshid=OGIzYTJhMTRmYQ==" role="button"
        ><i class="fab fa-instagram"></i
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
  var phoneNumber = "054-5979912";
  var message = "مرحبًا، أود أن أستفسر عن المنتج: {{$post->title}} - السعر: {{$post['price']}} شيقل";

  var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
  window.open(whatsappURL, "_blank");
}
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> 


<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script 
  type="text/javascript" 
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js" 
></script>
</body>
</html>



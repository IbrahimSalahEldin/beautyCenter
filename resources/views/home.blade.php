


<!DOCTYPE html>

<html lang="en" >
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
    <!-- Font Awesome -->
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
    
     <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

  <!-- <link rel="stylesheet" type="text/css" href="resources/css/home.css"> -->


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
        <ul class="navbar-nav  mb-2 mb-lg-0 Links">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#home">الصفحة الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about"> اقرأ عنا  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">  خدماتنا  </a>
          </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
</section>

 
  <!-- end navbar -->
  <!-- first section -->

<!-- Carousel wrapper -->

    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-mdb-target="#carouselBasicExample"
          data-mdb-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-mdb-target="#carouselBasicExample"
          data-mdb-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-mdb-target="#carouselBasicExample"
          data-mdb-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/staticimg/wo2.jpg')}}" class="d-block SlidPhoto" alt="Sunset Over the City"/>
          <div class="carousel-caption d-none d-md-block">
            <p class="beatyTitle">مرحبا بكم في مركز تجميل
              <br>
              <span class="fay7aa"> ف</span>يحاء</p>
          </div>
        </div>

        <div class="carousel-item">
        <img src="{{asset('images/staticimg/wo3.jpg')}}" class="d-block SlidPhoto" alt="Sunset Over the City"/>
        <div class="carousel-caption d-none d-md-block">
          <p class="beatyTitle">كوني متألقة ومشرقة 
              </p>
          </div>
        </div>

        <div class="carousel-item">
        <img src="{{asset('images/staticimg/women1.png')}}" class="d-block SlidPhoto" alt="Sunset Over the City"/>
        <div class="carousel-caption d-none d-md-block">
            <p class="beatyTitle"> تمتعي ببشرة نضرة
              </p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
<!-- Carousel wrapper -->

  <!-- end first section  -->

  <!-- second  section -->
  <section class="mt-5 mb-5 pt-5" id="about">
    <div class="container">
      <div class="row d-flex justify-content-around">
        <div class=" col-md-5 col-12 data mb-3 row d-flex justify-content-center align-items-center text-center" data-aos="fade-right">
          <h2 >
             مرحبا بكم في مركز فيحاء للتجميل 
          </h2>
          <p >
          يقوم الطبيب المختص بمعاينة الحالة وفحصها جيداً قبل العملية، ومن ثم يتم تجهيزها وتحضيرها لبدء عملية التنظيف. يلجأ الطبيب أثناء العملية إلى استعمال ذراع خاصة أو عصا في سبيل التخلص من الأوساخ المتراكمة في أعماق مسامات الجلد، والخلايا التالفة والميتة، والدهون المتراكمة.
          </p>
        </div>
        <div class="col-12 col-md-5 mb-3" data-aos="fade-left">
            <img class="image2" src="{{asset('images/staticimg/wo5.jpg')}} " alt="img2">
        </div>

      </div>
    </div>
  </section>
  <!-- end second section  -->
<!-- product section -->
<section class="galary mb-5 pt-3"  dir="rtl"> 
<div class=" d-flex justify-content-center galaryCon"> 
<div class="row galaryRow"> 
  <p class="categories text-center">صور</p> 
  <div class="CategoryPhotos col-12 row "> 
 
    <div class="col-md-4 col-12 IMG_CON d-flex justify-content-center" data-aos="fade-down" 
     data-aos-easing="linear" 
     data-aos-duration="1500"> 
      <img src="{{asset('images/staticimg/home1.jpeg')}}" alt="img3" class="GalaryPhoto"  > 
    </div> 
 
    <div class="col-md-4 col-10 IMG_CON DIF_CON d-flex justify-content-center" data-aos="fade-up" 
     data-aos-duration="3000"> 
      <img src="{{asset('images/staticimg/home2.jpeg')}}" alt="img3" class="GalaryPhoto gallery "  > 
 
    </div> 
 
    <div class="col-md-4 col-10 IMG_CON d-flex justify-content-center" data-aos="fade-down" 
     data-aos-easing="linear" 
     data-aos-duration="1500"> 
      <img src="{{asset('images/staticimg/home3.jpeg')}}" alt="img3" class="GalaryPhoto  gallery"  > 
 
    </div> 
     
  </div> 
 
     
  </div> 
   
</div> 
</section>



<!-- //////////////////////////////////////////////////////// -->


<section id="service">
  <div class="container" dir="rtl">
    <div class="row">
      <p class="categories">خدماتنا</p>
      <div class="col-lg-3 col-md-6 col-11 mb-3 "  data-aos="fade-up"
     data-aos-duration="3000">
        <div class="category">
        <a href="{{ route('category', 'makeup') }}" class="d-flex justify-content-center">
          <img src="{{asset('images/staticimg/home3.jpeg')}}" alt="img3" class="CategoryImage">
         <p class="CategoryWord"> 
          مكياج</p>
        </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-11 mb-3 mt-3 "  data-aos="fade-up"
     data-aos-duration="3000">
      <div class="category">
      <a href="{{ route('category', 'cure_humans') }}"> 
          <img src="{{asset('images/staticimg/c2.jpg')}}" alt="img3"  class="CategoryImage">
          <p class="CategoryWord"> 
          علاج البشرة</p>      
            </a> 
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-11 mb-3 "  data-aos="fade-up"
     data-aos-duration="3000">
        <div class="category">
        <a href="{{ route('category', 'makeup_courses') }}">
          <img src="{{asset('images/staticimg/c3.jpg')}}" alt="img3"  class="CategoryImage">
          <p class="CategoryWord"> 
          دورات تعليمية للمكياج
             </p> 
          </a> 
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-11 mb-3 mt-3 "  data-aos="fade-up"
     data-aos-duration="3000">
        <div class="category">
        <a href="{{ route('category', 'products') }}"> 
          <img src="{{asset('images/staticimg/products.jpg')}}" alt="img3"  class="CategoryImage">
          <p class="CategoryWord"> 
          منتجات  
             </p>  
          </a>
        </div>
        </div>
    </div>
  </div>
</section>
<!-- end product section -->
<!--third section  -->
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
    <a class="text-white" href="https://fayhaa.com/">fayhaa.com</a>
  </div>
  <!-- Copyright -->
</footer>
  
<!-- End of .container -->
<!-- end footer -->






  <script>
    function sendMessage() {
      var inputText = document.getElementById("inputText").value;
      var phoneNumber = "0556883088"; // رقم الواتساب في مصر
      var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(inputText);
      window.open(whatsappURL, "_blank");
    }
  </script>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
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

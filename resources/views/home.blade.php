


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> BEAUTY CENTER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
 
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini">
<table class="table mt-5 bg-black" style="color:white;">
  
  <tr>
      <th> img</th> <th> title</th> <th> Price</th> <th> Description </th> <th> create at </th>
      
  </tr>


  @foreach($posts as $post)
      <tr>
         
          <td><img width="100"  src="{{asset('images/posts/'.$post->image)}} "/></td>
        
          <td> {{$post->title}}</td>
          <td> {{$post["price"]}}</td>
          <td> {{$post["description"]}}</td>  
          <td>{{ $post->created_at->format('d/m/Y H:i:s') }}</td>
        
      </tr>
     
  @endforeach


</table>




  <div class="d-flex justify-content-center">
  {!! $posts->links() !!}
  </div>


<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>

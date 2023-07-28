@extends('layouts.app')

@section('content')
<a class=""  aria-current="page" href="{{route('book.create')}}"><button class="btn btn-primary w-25">Add Book</button></a>

    <table class="table mt-2 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
  
        <tr>
            <th> img</th> <th> title</th><th> Price</th> <th> Description </th> <th> create at </th>
            <th>Actions</th>
        </tr>


        @foreach($claints as $claint)
            <tr>
               
                <td><img width="75"  src="{{asset('images/claints/'.$claint->image)}} "/></td>
              
                <td> {{$claint->name}}</td>
                <td> {{$claint["email"]}}</td>
                <td> {{$claint["description"]}}</td>  
                
                <td>
                    <div class="d-flex justify-content-center">
                    <a class="w-100" aria-current="page" href="{{route('claint.edit', $claint->id)}}"><button class="btn btn-primary ">Edit</button></a>
                  
             
                   
                   
                </div>
                </td>
            </tr>
           
        @endforeach


    </table>

   


        <div class="d-flex justify-content-center">
        {{ $claints->render('categories.custom-pagination') }}
        </div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this book?");
    }
</script>

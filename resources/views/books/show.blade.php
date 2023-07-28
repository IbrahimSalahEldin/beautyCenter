@extends('layouts.app')

@section('content')


    <table class="table mt-2 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
  
        <tr>
            <th> img</th> <th> title</th><th> Price</th> <th> Description </th> <th> create at </th>
           
        </tr>


       
            <tr>
               
                <td><img width="75"  src="{{asset('images/books/'.$book->image)}} "/></td>
              
                <td> {{$book->title}}</td>
                <td> {{$book["price"]}}</td>
                <td> {{$book["description"]}}</td>  
                <td>{{ $book->created_at->format('d/m/Y H:i:s') }}</td>
                
            </tr>
           
       


    </table>

   


        
@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this book?");
    }
</script>

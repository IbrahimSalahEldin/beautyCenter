@extends('layouts.app')

@section('content')
<a class=""  aria-current="page" href="{{route('book.create')}}"><button class="btn btn-primary w-25">Add Book</button></a>

    <table class="table mt-2 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
  
        <tr>
            <th> img</th> <th> title</th><th> Price</th> <th> Description </th> <th> create at </th>
            <th>Actions</th>
        </tr>


        @foreach($books as $book)
            <tr>
               
                <td><img width="75"  src="{{asset('images/books/'.$book->image)}} "/></td>
              
                <td> {{$book->title}}</td>
                <td> {{$book["price"]}}</td>
                <td> {{$book["description"]}}</td>  
                <td>{{ $book->created_at->format('d/m/Y H:i:s') }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                    <a class="w-100" aria-current="page" href="{{route('book.edit', $book->id)}}"><button class="btn btn-primary ">Edit</button></a>
                  
             
                    <form action="{{route('book.destroy', $book->id)}}" method="book">
                        @method('delete')
                        @csrf
                      
                        <input type="submit" onclick="return confirmDelete()" class="btn btn-danger" value="delete">
                    </form>
                   
                </div>
                </td>
            </tr>
           
        @endforeach


    </table>

   


        <div class="d-flex justify-content-center">
        {{ $books->render('categories.custom-pagination') }}
        </div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this book?");
    }
</script>

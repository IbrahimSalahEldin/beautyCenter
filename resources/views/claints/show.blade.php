@extends('layouts.app')

@section('content')
<a class=""  aria-current="page" href="{{route('book.create')}}"><button class="btn btn-primary w-25">Add Book</button></a>

    <table class="table mt-2 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
  
        <tr>
            <th> name</th> <th> email</th>
            <th>Actions</th>
        </tr>


       
                <tr>
                   
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                   
                    <td>
                        <div class="d-flex justify-content-center">
                            <a class="w-100" aria-current="page" href="{{ route('client.edit', $client->id) }}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </div>
                    </td>
                </tr>
                @foreach ($client->books as $book)
                    <tr>
                        <td><img width="75" src="{{ asset('images/books/'.$book->image) }}"></td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->description }}</td>
                        
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

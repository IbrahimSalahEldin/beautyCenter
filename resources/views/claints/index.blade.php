@extends('layouts.app')

@section('content')

    <table class="table mt-2 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
  
    <tr>
            <th> name</th> <th> email</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>


        @foreach ($claints as $client)
                <tr>
                   
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                   
                    <td>
                        <div class="d-flex justify-content-center">
                            <a class="w-100" aria-current="page" href="{{ route('claint.edit', $client->id) }}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </div>
                       
                   
                    </td>
                    <td>
                       
                        <div class="d-flex justify-content-center">
                        <form action="{{route('claint.destroy', $client->id)}}" method="post">
                        @method('delete')
                        @csrf
                      
                        <input type="submit" onclick="return confirmDelete()" class="btn btn-danger" value="delete">
                    </form>
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
        @endforeach


    </table>

   


        <div class="d-flex justify-content-center">
        {{ $claints->render('categories.custom-pagination') }}
        </div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this Claint?");
    }
</script>

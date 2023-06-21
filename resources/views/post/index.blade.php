@extends('layouts.app')

@section('content')


    <table class="table mt-5 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
  
        <tr>
            <th> img</th> <th> title</th> <th> Price</th> <th> Description </th> <th> create at </th>
            <th>Actions</th>
        </tr>


        @foreach($posts as $post)
            <tr>
               
                <td><img width="100"  src="{{asset('images/posts/'.$post->image)}} "/></td>
              
                <td> {{$post->title}}</td>
                <td> {{$post["price"]}}</td>
                <td> {{$post["description"]}}</td>  
                <td>{{ $post->created_at->format('d/m/Y H:i:s') }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                    <!-- <a class="w-100" aria-current="page"href="{{route('post.show', $post->id)}}"><button class="btn btn-success ">View</button></a>  -->
                    <a class="w-100" aria-current="page" href="{{route('post.edit', $post->id)}}"><button class="btn btn-primary ">Edit</button></a>
                  
             
                    <form action="{{route('post.destroy', $post->id)}}" method="post">
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
        {!! $posts->links() !!}
        </div>
   
<a class="" aria-current="page" href="{{route('post.create')}}"><button class="btn btn-primary w-25">Add Post</button></a>


@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this post?");
    }
</script>

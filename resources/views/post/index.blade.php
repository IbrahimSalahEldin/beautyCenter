@extends('layouts.app')

@section('content')
<a class=""  aria-current="page" href="{{route('post.create')}}"><button class="btn btn-primary w-25">Add Post</button></a>

<table class="table mt-2 rounded-3" style="color:black; border: 5px solid gray; border-radius:5px;">
    <tr>
        <th>img</th>
        <th>title</th>
        <th>category</th>
        <th>Price</th>
        <th>Description</th>
        <th>create at</th> 
        <th>brand</th>
        <th>Actions</th>
    </tr>

    @foreach($posts as $post)
        @if($post->category == 'makeup') 
            <tr>
            <td><img width="75" src="{{asset('images/posts/'.$post->image)}} "/></td>
                <td>{{$post->title}}</td>
                <td>
                    @if($post->category == 'makeup')
                        مكياج
                    @elseif($post->category == 'cure_humans')

                    علاج البشرة
                     

                    @elseif($post->category == 'makeup_courses')
                        دورات تعليمية للمكياج
                    @else
                        منتجات
                    @endif
                </td>
                <td>--</td> 
                <td>--</td> 
                <td>{{ $post->created_at->format('d/m/Y H:i:s') }}</td>
                <td>--</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a class="w-100" aria-current="page" href="{{route('post.edit', $post->id)}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>

                        <form action="{{route('post.destroy', $post->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" onclick="return confirmDelete()" class="btn btn-danger" value="delete">
                        </form>
                    </div>
                </td>
            </tr>
        @elseif($post->category == 'products')
        <tr>
                <td><img width="75" src="{{asset('images/posts/'.$post->image)}} "/></td>
                <td>{{$post->title}}</td>
                <td>
                    @if($post->category == 'cure_humans')
                        علاج البشر
                    @elseif($post->category == 'makeup_courses')
                        دورات تعليمية للمكياج
                    @else
                        منتجات
                    @endif
                </td>
                <td>{{$post["price"]}}</td>
                <td>{{$post["description"]}}</td>
                <td>{{ $post->created_at->format('d/m/Y H:i:s') }}</td>
                <td>{{$post->subcategory}}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a class="w-100" aria-current="page" href="{{route('post.edit', $post->id)}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>

                        <form action="{{route('post.destroy', $post->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" onclick="return confirmDelete()" class="btn btn-danger" value="delete">
                        </form>
                    </div>
                </td>
            </tr>
        @else
            <tr>
                <td><img width="75" src="{{asset('images/posts/'.$post->image)}} "/></td>
                <td>{{$post->title}}</td>
                <td>
                    @if($post->category == 'cure_humans')
                        علاج البشرة
                    @elseif($post->category == 'makeup_courses')
                        دورات تعليمية للمكياج
                    @else
                        منتجات
                    @endif
                </td>
                <td>{{$post["price"]}}</td>
                <td>{{$post["description"]}}</td>
                <td>{{ $post->created_at->format('d/m/Y H:i:s') }}</td>
                <td>--</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a class="w-100" aria-current="page" href="{{route('post.edit', $post->id)}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>

                        <form action="{{route('post.destroy', $post->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" onclick="return confirmDelete()" class="btn btn-danger" value="delete">
                        </form>
                    </div>
                </td>
            </tr>
        @endif
    @endforeach
</table>

<div class="d-flex justify-content-center">
    {{ $posts->render('categories.custom-pagination') }}
</div>
@endsection

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this post?");
    }
</script>

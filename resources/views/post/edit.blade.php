@extends('layouts.app')

@section('content')

<div class="container d-flex mt-5 justify-content-center bg-white" style="color:black;"> 
    <div class="row w-75">

 
<h1 class="mb-3"> Edit post</h1>



    <form method="post" action="{{ route('post.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('put')


  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" 
    value="{{ $post->title }}"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
  </div>
  @error('title')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror


  
  <div class="form-group mt-3">
    <label for="exampleInputEmail2">categoreis</label>
    <select name="category"   class="form-control"
    value="{{$post->category}}"
    id="exampleInputEmail2" >
      <!-- <option value="مكياج">مكياج</option>
      <option value="علاج البشر">علاج البشر</option>
      <option value="دورات تعليمية للمكياج">دورات تعليمية للمكياج</option>
      <option value="منتجات">منتجات</option> -->
      <option value="makeup" @if ($post->category == 'makeup') selected @endif>مكياج</option>
      <option value="cure_humans" @if ($post->category == 'cure_humans') selected @endif>علاج البشرة</option>
      <option value="makeup_courses" @if ($post->category == 'makeup_courses') selected @endif> دورات تعليمية للمكياج</option>
      <option value="products" @if ($post->category == 'products') selected @endif>منتجات</option>
      
    </select>
    <!-- <input type="text" class="form-control" name="category" 
    value="{{old('category')}}"
    id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter a catygory"> -->
  </div>
  @error('category')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  


  
  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" name="price" 
    value="{{$post->price}}"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
  </div>
  @error('price')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Description</label>
    <textarea  class="form-control"   name="description" id="exampleInputPassword1" placeholder="Description">
    {{ $post->description }} </textarea>
  </div>
  @error('description')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  
  
  <div class="form-outline mb-4">
    <input type="file" id="form6Example4" value="{{$post->image}}" name="image" class="form-control" />
    <label class="form-label" for="form6Example4">image</label>
  </div>

  @error('image')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <button type="submit" class="btn btn-primary mt-3" >Edit</button>
</form>
    </div>
</div>

   


@endsection

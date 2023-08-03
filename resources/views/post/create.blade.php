@extends('layouts.app')

@section('content')
<div class="container d-flex mt-5 justify-content-center bg-white" style="color:black;"> 
    <div class="row w-75">

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

  <div class="form-group mt-3">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" 
    value="{{old('title')}}"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
  </div>
  @error('title')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror


  <!-- category -->
  
  <div class="form-group mt-3">
    <label for="exampleInputEmail2">Categories</label>
    <select name="category" class="form-control"
    value="{{old('category')}}"
    id="exampleInputEmail2">
      <option value="makeup">مكياج</option>
      <option value="cure_humans">علاج البشر</option>
      <option value="makeup_courses">دورات تعليمية للمكياج</option>
      <option value="products">منتجات</option>
    </select>
  </div>
  @error('category')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  
  <div class="form-group mt-3" id="subcategoryDiv" style="display: none;">
    <label for="exampleInputSubcategory">Subcategory</label>
    <input type="text" class="form-control" name="subcategory" value="{{ old('subcategory') }}" id="exampleInputSubcategory" placeholder="Enter subcategory">
  </div>

  <div class="form-group mt-3">
    <label for="exampleInputEmail">Price</label>
    <input type="number" class="form-control" name="price" 
    value="{{old('price')}}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter price">
  </div>
  @error('price')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" value="{{old('description')}}" name="description" id="exampleInputPassword1" placeholder="Description"></textarea>
  </div>
  @error('description')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  
  
  <div class="form-outline mb-4">
    <input type="file" id="form6Example4" value="{{old('image')}}" name="image" class="form-control" />
    <label class="form-label" for="form6Example4">Image</label>
  </div>

  @error('image')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  <button type="submit" class="btn btn-primary mt-3">Create</button>
</form>
    </div>
</div>

<script>
  const categorySelect = document.getElementById('exampleInputEmail2');
  const subcategoryDiv = document.getElementById('subcategoryDiv');

  categorySelect.addEventListener('change', function() {
    if (categorySelect.value === 'products') {
      subcategoryDiv.style.display = 'block';
    } else {
      subcategoryDiv.style.display = 'none';
    }
  });
</script>
@endsection

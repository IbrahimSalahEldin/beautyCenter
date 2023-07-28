@extends('layouts.app')

@section('content')
<div class="container d-flex mt-5 justify-content-center bg-white" style="color:black;"> 
    <div class="row w-75">

    <form action="{{ route('claint.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <input type="number" class="form-control" name="book_id" 
    value="{{old('book_id')}}"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="please focus and enter the ID not name" >


  <div class="form-group mt-3">
    <label for="exampleInputEmail">name</label>
    <input type="text" class="form-control" name="name" 
    value="{{old('name')}}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  @error('name')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  
  <div class="form-group mt-3">
    <label for="exampleInputEmail">email</label>
    <input type="email" class="form-control" name="email" 
    value="{{old('email')}}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @error('email')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  
  
  <button type="submit" class="btn btn-primary mt-3" >Create</button>
</form>
    </div>
</div>

@endsection


    <form action="{{ route('claint.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('post')

    <input type="text" class="form-control" name="book" 
    value="{{old('boot')}}"
    id="exampleInputEmail1" aria-describedby="emailHelp" hidden>




  
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


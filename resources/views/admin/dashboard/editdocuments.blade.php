
    @extends('admin.dashboard.layout.main')

    @section('content')

  <div class="container">
      <div class="card">
  
  <form action="{{url('admin/updatedocuments/'.$user->id)}}" method ="post"  enctype="multipart/form-data">
       @csrf
       @method('PUT')
      <h4><a href="" class="btn btn-primary btn-sm mt-3">Edit Documents</a></h4>
      <h4><a href="{{url('/admin/documents')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4>
      <div class="form-group">
          <label for="name"> File Name</label>
          <input type="text" name ="name" value="{{$user->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
          <span class ="text-danger">@error('name'){{$message}} @enderror</span>
      
         
        </div>
        <div class="form-group">
            <label for="image">File</label>
            <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >
            {{-- <img  width="30%" class="img-circle" src="{{asset('images/'. $user->image)}}"> --}}
            
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
        @endif
          </div>
        
        
          <a href="{{url('admin/documents')}}" class="btn btn-primary">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  </div>

  @endsection


    @extends('admin.dashboard.layout.main')

    @section('content')
<div class="container mt-1">
    <div class="card">

<form action="{{url('admin/savedocuments')}}" method ="post" enctype="multipart/form-data">
    @csrf
   
    <h4><a href="" class="btn btn-primary btn-sm mt-3">Add Document</a></h4>
    <h4><a href="{{url('/admin/documents')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4>
    
    
    
    <div class="form-group mt-3">
        <label for="name"> File Name</label>
        <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('name'){{$message}} @enderror</span>
      
     
      <div class="form-group">
        <label for="name">File</label>
        <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >
        
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
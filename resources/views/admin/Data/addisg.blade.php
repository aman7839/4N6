

  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1 pt-4 pb-4">
        <div class="card">
          <div class="card-header d-flex">
            <h4>Add Record</h4>
          </div>
    
   <div class="card-body">
    <form action="{{url('admin/saveisg')}}" method ="post" enctype="multipart/form-data">
      @csrf
     
     
      
      
      
      
      <div class="form-group mt-3">
        <label for="topic">  Topic </label>
        <input type="text" name ="topic" value = "{{old('topic')}}" class="form-control" id="topic" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('topic'){{$message}} @enderror</span>
      
      </div>
    
    
       
        
    <div class="form-group mt-3">
        <label for="info">  Info </label>
        <input type="text" name ="info" value = "{{old('info')}}" class="form-control" id="info" aria-describedby="emailHelp" >
        <span class ="text-danger">@error('info'){{$message}} @enderror</span>
      
      </div>
    
      <a href="{{url('admin/viewisg')}}" class="btn btn-danger">Cancel</a>
      
      <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
   </div>
    

    </div>
    </div>

    @endsection


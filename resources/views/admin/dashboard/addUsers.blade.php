{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Add Users</title>
</head>
<body> --}}

  @extends('admin.dashboard.layout.main')

  @section('content')
    <div class="container mt-1">
        <div class="card">
    
    <form action="{{route('users.save')}}" method ="post" enctype="multipart/form-data">
        @csrf
       
        <h4><a href="" class="btn btn-primary btn-sm mt-3">Add Users</a></h4>
        <h4><a href="{{url('/admin/users')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4>
        
        
        
        <div class="form-group mt-3">
            <label for="name">Name</label>
            <input type="text" name ="name" value = "{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>
          
          </div>
          <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name ="mobile"  value = "{{old('mobile')}}"  class="form-control" id="mobile" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('mobile'){{$message}} @enderror</span>
          </div>
          <div class="form-group">
            <label for="images">Images</label>
            <input type="file" name ="image"  class="form-control" id="images" aria-describedby="emailHelp" >
            
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
        @endif
          </div>
          
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name ="location"  value = "{{old('location')}}"  class="form-control" id="location" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('location'){{$message}} @enderror</span>
          
          </div>
          {{-- <div class="form-group">
            <label>User Role</label>
            <select class="form-control" name="role" >
                <option value="0">Student</option>
                <option value="2">Coach</option>
            </select>
            <span class ="text-danger">@error('location'){{$message}} @enderror</span>
        </div> --}}
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name ="email"   value = "{{old('email')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <span class ="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          <span class ="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    

    </div>
    </div>

    @endsection

{{-- </body>
</html> --}}
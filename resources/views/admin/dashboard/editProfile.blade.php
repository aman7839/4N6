{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> --}}

    @extends('admin.dashboard.layout.main')

    @section('content')
  
      <div class="container">
          <div class="card">
      
      <form action="{{url('admin/updateProfile/'.$user->id)}}" method ="post" enctype="multipart/form-data">
        
           @csrf
          @method('PUT')
          <h4><a href="" class="btn btn-primary btn-sm mt-3">Edit Profile</a></h4>
          <h4><a href="{{url('/admin/users')}}" class="btn btn-primary btn-sm mt-3">Back</a></h4>
          <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name ="name" value="{{$user->name}}" class="form-control" id="name" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('name'){{$message}} @enderror</span>

             
            </div>
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" name ="mobile" value="{{$user->mobile}}" class="form-control" id="mobile" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('mobile'){{$message}} @enderror</span>

            
            </div>
            <div class="form-group">
               <div class="form-group">
                <label for="image">Images</label>
                

                <input type="file" name="image"  class="form-control" id="image" aria-describedby="emailHelp" >
                <img class="user-avatar rounded-circle" src="{{asset('images/'. $user->image)}}" alt="User Avatar">


  
              
            
            </div>
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" name ="location" value="{{$user->location}}" class="form-control" id="location" aria-describedby="emailHelp" >
            <span class ="text-danger">@error('location'){{$message}} @enderror</span>

            
            </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name ="email" value="{{$user->email}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <span class ="text-danger">@error('email'){{$message}} @enderror</span>
          
          </div>
          
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      </div>
  
      @endsection
  
  {{-- </body>
  
  </html> --}}
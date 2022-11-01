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
        <div class="row m-2">
            <form action="">
                <div class="form-group mt-2">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary mt-3">Search</button>
                  <a href="{{url('admin/users')}}"><button  class="btn btn-primary mt-3" type= "button">Reset</button></a>
                  
                </div>

                
            </form>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addusers')}}"  class="btn btn-primary btn-sm mt-2"> Add Users</a></h4>
                        {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                     
                                    <th>Email</th> 
                                    <th>Profile Picture</th>                                      
                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td><img src= "images/{{$item->image}}" width="30%" class="img-circle" ></td> --}}
                                    <td><img src="{{ asset('images/'.$item->image) }}" width="60%" class="img-circle alt=" title=""></td>
                                  
                                  
                                    <td>{{ $item->mobile }}</td>
                                    
                                    <td>{{$item->role_as ? 'admin' : 'normal'}}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>
                                        <a href={{url('admin/editUsers/'.$item->id)}} class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deleteuser/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" >Delete</a>
                                        {{-- <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href={{url('deleteuser/'.$item->id)}} ><i class="fa fa-trash"></i></a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $user->Links()}}</span>
                        <style>
                            .w-5{
                                display:none;

                            }
                         </style> 

                         
    
                    </div>  
                   
                </div>
            </div>
        </div>
    </div>
   
    @endsection
 
{{-- </body>
</html> --}}
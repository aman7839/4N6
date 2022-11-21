

    @extends('admin.dashboard.layout.main')

    @section('content')

    <div class="container">
        <div class="row m-2">
           <div class="col-md-12">
            {{-- <form action="">
                <div class="form-group mt-4 search_bar">
               
                  <input type="search" name="search" id="" class="form-control" placeholder="Search Here" aria-describedby="helpId" value = "{{$search}}">
                  <button  class="btn btn-primary">Search</button>
                  <a href="{{url('admin/users')}}"><i class="fa fa-times"></i></a>
                  
                </div>

                
            </form> --}}
           </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ url('admin/addisg')}}"  class="btn btn-primary btn-sm mt-2"> <i class="fa fa-plus mr-2"></i> Add Record</a></h4>
                        {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Topic</th>
                                     
                                    <th>Info</th> 
                                    
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topic as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->topic }}</td>
                                    <td>{{ $item->info }}</td>
                                   
                                    <td>
                                        <a href={{url('admin/editisg/'.$item->id)}} class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href={{url('admin/deleteisg/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" ><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                        <span>{{ $topic->links()}}</span>
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
 

    @extends('admin.dashboard.layout.main')

    @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ url('admin/adddocuments')}}"  class="btn btn-primary btn-sm mt-2"> Add Documents</a></h4>
                    {{-- <h4><a href="{{url('/admin/logout')}}" class="btn btn-primary btn-sm mt-3">Logout</a></h4> --}}
                    
                    
                </div>
                <div class="card-body">         

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                
                                <th> Document Name</th>    
                                <th> Last Updted</th>                            
                                <th>Edit</th>
                                <th>Delete</th>
                              
                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                             
                                <td>{{ $item->image }}</td>
                                <td>{{ $item->updated_at }}</td>
                               
                              
                                {{-- <td><img src= "images/{{$item->image}}" width="30%" class="img-circle" ></td> --}}
                                {{-- <td><img src="{{ asset('images/'.$item->image) }}" width="60%" class="img-circle alt=" title=""></td> --}}
                              
                              
                               
                                <td>
                                    <a href={{url('admin/editdocuments/'.$item->id)}} class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href={{url('admin/deletedocuments/'.$item->id)}} class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span>{{ $user->links() }}</span>
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
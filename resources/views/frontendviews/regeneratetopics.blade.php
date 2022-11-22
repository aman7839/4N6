

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
                        <h4><a href=""  class="btn btn-primary btn-sm mt-2 "> Regenarate Topics</a></h4>
                        
                        
                    </div>
                    <div class="card-body">     
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Characters</th>
                                    <th>Location</th>
                                     
                                    <th>Situation</th> 
                                    
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topic as $item)
                                <tr>
                                    <td>{{ $item->info }}</td>
                                    <td>{{ $item->info }}</td>
                                    <td>{{ $item->info  }}</td>
                                  

                                  
                                  
                                
                                  
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                       

                         
    
                    </div>  
                   
                </div>
            </div>
        </div>
    </div>
   
    @endsection

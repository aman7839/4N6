
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
   </head>
   <body>
       @extends('admin.dashboard.main')
   
       @section('content')

       
       
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-header">
                           <h4><a href="{{url('/addstate')}}" class="btn btn-primary btn-sm mt-2">Add State</a></h4>
   
   
                          
                         
                          
   
                               <table class="table table-bordered table-striped">
                                   <thead>
                                       <tr>
                                           <th>ID</th>
                                           <th>state name</th>s
                                           <th>state code</th>
                                           
                                       </tr>
                                   </thead>
                                   <tbody>
                                    @foreach ($state as $item)
                                       <tr>
                                           <td>{{ $item->id }}</td>
                                           <td>{{ $item->state_name }}</td>
                                           <td>{{ $item->state_code }}</td>
                                   
                                       </tr>
                                       @endforeach
                                   </tbody>
                               </table>
                            </form>
           
                             
           </div>
       </div>
   </div>
   </div>
   </div>
   @endsection
   
   
   
   
   
           
           
   
   </body>
   </html>
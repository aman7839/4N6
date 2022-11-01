<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme</title>
</head>
<body>

    @extends('admin.dashboard.main')

    @section('content')


    
   
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{url('addcategories')}}"  class="btn btn-primary btn-sm mt-2"> Add Category</a></h4>
                        

                    </div>
                    <div class="card-body">     
    
                        
                                
                                <form action ="" method="post">
                                    @csrf
                                    
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--selected--</option>
                    
                                        @foreach($category as $category)
                                       
                                        <option value={{$category->id}}>{{$category->categories}}</option>
                                        
                                        @endforeach
                    
                                                                                                                
                                      </select>
                                     
                                    </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
 
</body>
</html>
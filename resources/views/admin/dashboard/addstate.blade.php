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
                        <h4><a href="" class="btn btn-primary btn-sm mt-2">Add State</a></h4>


                        <form action = {{url('/addstate')}}  method="POST">
                            
                            @csrf
                           
                           
                      
                            <div class="form-group">
                              <label for="exampleFormControlInput1">state name</label>
                              <input type="text" name="state_name" value =""class="form-control" id="exampleFormControlInput1" placeholder="enter state name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> state code</label>
                                <input type="text" name="state_code" value ="" class="form-control" id="exampleFormControlInput1" placeholder="enter state name">
                              </div>
                              <input type="submit" name="submit" value="submit" class="btn btn-success">
                            
                              
                              
                            </div>


                            
                            
                            
                          </form>

        </div>
    </div>
</div>
</div>
</div>
@endsection





        
        

</body>
</html>
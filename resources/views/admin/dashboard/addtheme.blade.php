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

        <div class="card">

            <form action ="{{route('theme.save')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Add Theme</label>
                  <input type="text" name="themes" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  
                  
                </div>
                
                </form>
                
               
        </div>
    </div>

    @endsection
</body>
</html>
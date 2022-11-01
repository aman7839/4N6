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


       <form action="" method="post" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">add theme</label>
          <input type="text" name="themes"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

       @endsection
    
</body>
</html>
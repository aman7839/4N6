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

            <form action ="{{route('awards.save')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Add Awards</label>
                  <input type="text" name="awards_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  <span class ="text-danger">@error('awards_name'){{$message}} @enderror</span>                
                 </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                
               
        </div>
    </div>

    @endsection

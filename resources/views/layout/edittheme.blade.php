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
                        <h4>
                            <a href="{{ url('addtheme') }}" class="btn btn-primary float-end">edit theme</a>
                        </h4>
                    </div>
                    <div class="card-body">
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Theme</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($theme as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td> --}}
                                   
                                    
                                        <a href="{{ url('edittheme/') }}" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
    
                    </div>
                </div>
            </div>
        </div>
    </div>


    
       @endsection

</body>
</html>
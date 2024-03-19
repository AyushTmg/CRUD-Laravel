<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>

@if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
@endif
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                                <h1>Product List
                                <a href="{{route("add-product")}}" class="btn btn-primary float-right">Add Products</a>
                                </h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">

                            <thead>                                
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Is Available</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    @foreach ($products as $item)
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->is_available}}</td>
                                    <td>
                                        <a href="{{route('edit-product',$item->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('delete-product',$item->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>


                            </table>
                        </div>
                    </div>
        </div>
    </div>
</div>
</body>
</html>
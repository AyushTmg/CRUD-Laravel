

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Product Update Page</h1>


<form action="{{route('edit-product',$product->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="md-3">
                <label for="title">Name: </label>
                <input type="text" name="title" value="{{$product->title}}">
                <br>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="md-3">
                <label for="description">Description: </label>
                <input type="text" name="description" value="{{$product->description}}">
                <br>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="md-3">
                <label for="is_available">Is Available: </label>
                <input type="checkbox" name="is_available" value="{{$product->is_available}}">
            </div>

            <input type="submit" value="Update" class="btn btn-primary">
            <a href="{{route('product-list')}}" class="btn btn-primary">Back</a>

</form>
        

    
</body>
</html>
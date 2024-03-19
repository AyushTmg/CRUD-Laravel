

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Product Create Page</h1>


<form action="{{route('add-product')}}" method="post">
            @csrf
            <div class="md-3">
                <label for="title">Name: </label>
                <input type="text" name="title" value="{{old('title')}}">
                <br>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="md-3">
                <label for="description">Description: </label>
                <input type="text" name="description" value="{{old('description')}}">
                <br>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="md-3">
                <label for="is_available">Is Available: </label>
                <input type="checkbox" name="is_available" >
            </div>

            <input type="submit" value="Create" class="btn btn-primary">
            <a href="{{route('product-list')}}" class="btn btn-primary">Back</a>

</form>
        

    
</body>
</html>
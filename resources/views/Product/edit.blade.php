<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
</head>
<body>
<h2>Create user</h2>
<form action="{{route('updateProduct',['id' => $product->id])}}" method="post">
    @csrf
    <label for="Name">
        Name:
        <input type="text" name="name" value="{{$product->name}}">
    </label><br><br>
    <label for="Description">
        Description:
        <input type="text" name="description" value="{{$product->description}}">
    </label><br><br>
    <label for="Price">
        Price:
        <input type="text" name="price" value="{{$product->price}}">
    </label><br><br>
    <label for="image">
        image:
        <input type="text" name="image" value="{{$product->image}}">
    </label><br><br>
    <label for="product_id">
        Product Code:
        <input type="text" name="product_id" value="{{$product->product_id}}">
    </label><br><br>
    <button type="submit">Edit user</button>
</form>
</body>
</html>

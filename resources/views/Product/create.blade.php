<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">Product Store</div>
            <div class="links">
                <a href="{{route('store')}}">View Products</a>
            </div>
        </div>
    </div>
    <h2>Create Product</h2>
    <form action="{{route('createProduct')}}" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Description">
            Description:
            <input type="text" name="description" >
        </label><br><br>
        <label for="Price">
            Price:
            <input type="text" name="price">
        </label><br><br>
        <label for="image">
            image:
            <input type="text" name="image">
        </label><br><br>
        <label for="product_id">
            Product Code:
            <input type="text" name="product_id">
        </label><br><br>
        <button type="submit">Create Product</button>
    </form>

</body>
</html>

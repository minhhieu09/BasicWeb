<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Product Store</div>
        <div class="links">
            <a href="{{route('create')}}">Create Product</a>
            <a href="{{route('store')}}">View</a>
            <a href="{{route('updateProfile')}}">Profile Customer</a>
        </div>
    </div>
</div>
<form method="GET" action="{{route('search')}}">
    <input type="text" name="query" placeholder="Tìm kiếm...">
    <button type="submit">Tìm kiếm</button>
</form>
<div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Mô tả</th>
                <th>Ảnh</th>
                <th>Mô tả</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count() > 0)
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->product_id}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->image}}</td>
                        <td>
                            <a href="{{route('updateProduct',['id' => $product->id])}}">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('deleteProduct',['id' => $product->id])}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>Không tìm thấy sản phẩm nào phù hợp.</p>
            @endif

        </tbody>
    </table>
</div>
</body>
</html>


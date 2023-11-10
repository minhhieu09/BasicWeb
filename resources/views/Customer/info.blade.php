<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Profile</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Product Store</div>
        <div class="links">
            <a href="{{route('store')}}">View</a>
        </div>
    </div>
</div>
<form method="POST" action="{{ route('updateCustomer', $customer->id)}}">
    @csrf <!-- Thêm CSRF token cho bảo mật -->
        <!-- Input cho tên người dùng -->
        <label for="fullname">Tên người dùng:</label>
        <input type="text" id="fullname" name="fullname" value="{{$customer->fullname}}"><br><br>

        <!-- Input cho address-->
        <label for="address">Địa chỉ:</label>
        <input type="text" id="address" name="address" value="{{$customer->address}}"><br><br>

        <!-- Input cho phone number-->
        <label for="number">Số điện thoại:</label>
        <input type="text" id="number" name="number" value="{{$customer->phone_number}}"><br><br>

        <!-- Input cho email -->
        <label for="gmail">Email:</label>
        <input type="gmail" id="gmail" name="gmail" value="{{$customer->gmail}}"><br><br>

        <!-- Nút submit -->
    <button type="submit">Cập nhật người dùng</button>
</form>
<form method="GET" action="{{route('logout')}}">
    @csrf
    <button type="submit">Đăng xuất</button>
</form>


</body>
</html>

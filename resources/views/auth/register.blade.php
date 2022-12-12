<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tim do that lac</title>
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <form class="login" action="{{ route('register') }}" method="POST">
        @csrf
        <h1 style="text-align: center; ">Đăng ký tài khoản</h1>
        <input type="text" name="name" placeholder="Họ và tên">
        <input type="text" name="phone" placeholder="Số điện thoại">
        <input type="text" name="email" placeholder="Tài khoản email">
        <input type="password" name="password" placeholder="Mật khẩu">
        <button ><a href="{{ route('register') }}">Đăng ký</a></button>
        <h4>Bạn đã có tài khoản ? <a href="{{ route('login') }}" style="color: rgba(29, 161, 238, 0.753);"> Đăng nhập</a></h4>
        
        
        
    </form>


    <!-- partial -->

</body>

</html>

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
    <form class="login" action="{{ route('login') }}"  method="POST">
        @csrf
        @if (session('success'))
            <h1 style="text-align: center; color: rgb(24, 104, 24)">Đăng ký thành công</h1>
        @endif
        <h1 style="text-align: center; ">Đăng nhập</h1>
        <input type="text" name="email" placeholder="Tài khoản email">
        <input type="password" name="password" placeholder="Mật khẩu">
        <button type="submit"><a >Đăng nhập</a></button>
        <h4>Bạn chưa có tài khoản ? <a href="{{ route('register') }}" style="color: rgba(29, 161, 238, 0.753);"> Đăng ký ngay</a></h4>

        
        
    </form>


    <!-- partial -->

</body>

</html>

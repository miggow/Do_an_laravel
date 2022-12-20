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
    <form class="login" action="{{ route('doRegister') }}" method="POST">
        @csrf
        <h1 style="text-align: center; ">Đăng ký tài khoản</h1>
        <input type="text" name="name" placeholder="Họ và tên">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="number" name="phone" placeholder="Số điện thoại">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" name="email" placeholder="Tài khoản email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" name="password" placeholder="Mật khẩu">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <button><a href="{{ route('doRegister') }}">Đăng ký</a></button>
        <h4>Bạn đã có tài khoản ? <a href="{{ route('login') }}" style="color: rgba(29, 161, 238, 0.753);"> Đăng
                nhập</a></h4>



    </form>


    <!-- partial -->

</body>

</html>

@extends('layout')
@section('main')
    <section style="background-color: #eee;">
        <div class="container py-5">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset(Auth::user()->image) }}" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>


                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('update-profile', Auth::user()->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Họ và tên</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name"
                                            placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Tài khoản Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="{{ Auth::user()->email }}" disabled>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Số điện thoại</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="phone"
                                            value="{{ Auth::user()->phone }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mật khẩu</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input onfocus="this.value=''" class="form-control" type="password" name="password"
                                            value="{{ Auth::user()->password }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-sm-3">
                                    <p class="mb-0">avatar</p>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label"></label>
                                    <input class="form-control" type="file" id="image" name="image" value="{{ Auth::user()->image }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

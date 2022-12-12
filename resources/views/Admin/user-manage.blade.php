@extends('Admin.dashboard')
@section('main-content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Người dùng
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>avatar</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Tài khoản Email</th>
                                <th>Tạo lúc</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        @foreach ($user as $user)
                        <tbody>
                            <tr>
                                <td><img src="{{ asset($user->image) }}" width="150px" style="border-radius:90%; " ></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <button >Edit</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                            
                        </tbody>
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
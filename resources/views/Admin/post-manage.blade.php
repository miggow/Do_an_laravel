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
                                <th>Người tạo</th>
                                <th>Tiêu đề bài đăng</th>              
                                <th>Nội dung bài đăng</th>
                                <th>Hình ảnh</th>
                                <th>Tạo lúc</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        @foreach ($post as $post)
                        <tbody>
                            <tr>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{ $post->content }}</td>
                                <td><img src="{{ asset($post->image) }}" width="200px"  ></td>

                                <td>{{ $post->created_at }}</td>
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
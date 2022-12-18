@extends('Admin.dashboard')

@section('main-content')


    <form action="{{ route('category.store') }}" method="POST" style="margin-left: 20%; margin-top: 5%;" >
        @csrf
        @if (session('status'))
      
           <h1 style="color: green; background-color: rgb(255, 255, 255);">{{ session('status') }}</h1>
            
        
        @endif
        <h2 style="text-align: center; margin-top:5%">Tạo danh mục</h2>
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        
        <button type="submit">Tạo</button>
        <div style="margin-top: 40px;">
            <a style="text-decoration: none;" href="{{ route('category.index') }}">Danh sách các danh mục</a><span>&#8594;</span>
        </div>
    </form>
@endsection

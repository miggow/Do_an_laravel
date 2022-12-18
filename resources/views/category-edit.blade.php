@extends('Admin.dashboard')
@section('main-content')
<form action="{{  url('categories/update/'.$category->id)  }}" method="POST" style="margin: 5% 25% 10% 25%;" >
    @method('PUT')
    @csrf
    @if (session('status'))
  
       <h1 style="color: green; background-color: rgb(255, 255, 255);">{{ session('status') }}</h1>
        
    
    @endif
    <h2 style="text-align: center; margin-top:5%">Chỉnh sửa danh mục</h2>
    <div class="mb-3">
        <label for="name" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    
    
    <button type="submit">Chỉnh sửa</button>
    <div style="margin-top: 40px;">
        <a style="text-decoration: none;" href="{{ route('category.index') }}">Danh sách các danh mục</a><span>&#8594;</span>
    </div>
</form>
@endsection
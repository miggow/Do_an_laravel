@extends('layout')

@section('main')
    <h2 style="text-align: center; margin-top:5%">Tạo bài đăng</h2>
    <form action="{{ route('store') }}" method="POST" style="margin: 5% 25% 10% 25%;" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung bài đăng</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Loại đồ vật</label>
            <select style="width: 60%;" name="category_id" id="">
                <option selected disabled>Chọn loại danh mục</option>
                @foreach ($category as $category)
                    <option value="2">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <label for="formFile" class="form-label">Hình ảnh chi tiết</label>
                <input class="form-control" type="file" id="image" name="image">
                @error('image')

                    <strong style="color: red;">{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <button type="submit">Đăng bài</button>
    </form>
@endsection

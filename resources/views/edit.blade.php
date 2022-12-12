@extends('layout')

@section('main')

<h2 style="text-align: center; margin-top:5%">sửa bài đăng</h2>
    <form action="{{ url('update/'.$post->id) }}" method="POST" style="margin: 5% 25% 10% 25%;" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung bài đăng</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ $post->content }}">
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <label for="formFile" class="form-label">Hình ảnh chi tiết</label>
                <input class="form-control" type="file" id="image" name="image" value="{{ $post->image }}">
              </div>
        </div>
        <button type="submit" style="border-radius: 5%;
        border: none;
        padding: 20px;">Sửa bài viết</button>
    </form>
@endsection

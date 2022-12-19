@extends('layout')

@section('main')
    <div class="container-fluid tm-container-content tm-mt-60">

        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary" style="margin-left: 5%">Tiêu đề: {{ $post->title }} </h2>
            <i class="col-12 tm-text-primary" style="margin-left: 5%">Danh mục: {{ $post->category->name }}</i>
        </div>
        <div class="row tm-mb-90">
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="{{ asset($post->image) }}" alt="Image" class="img-fluid" style="margin-left: 15%">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">

                <div class="tm-bg-gray tm-video-details">
                    @if (Auth::user()->id == $post->user_id)
                        <div style="margin-left:60%; "><a
                                href="{{ route('edit', $post->id) }} "style="margin-right:30px;font-size: 30px;">Sửa</a>
                            <a href="{{ route('delete', $post->id) }}" style="font-size: 30px;">xóa</a>
                        </div>
                    @endif


                    <h2 class="tm-text-gray-dark mb-3">Nội dung:</h2>
                    <h4>{{ $post->content }}</h4>
                    <p class="mb-0">
                        liên hệ: {{ $post->user->phone }}

                    </p>
                    <hr>
                    <div>
                        <h2 class="tm-text-gray-dark mb-3">Bình luận:</h2>
                        @foreach ($post->comments as $comment)
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="{{ asset($comment->user->image) }}" alt="avatar" width="25"
                                                height="25" />

                                            <p class="small mb-0 ms-2">{{ $comment->user->name }}</p>

                                        </div>

                                    </div>
                                    <p class="mb-0">
                                        {{ $comment->created_at }}

                                    </p>

                                    <h3>{{ $comment->comment }}</h3>

                                    @if (Auth::user()->id == $comment->user->id)
                                        <a href="{{ route('delete-comment', ['id' => $comment->id]) }}"
                                            class="btn btn-primary btn-sm me-2">Xóa</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" src="{{ asset(Auth::user()->image) }}"
                                    alt="avatar" width="40" height="40" />
                                <div class="form-outline w-100">
                                    <form action="{{ url('comment') }}" method="POST">
                                        @if (session('message'))
                                            <h6 class="alert alert-warning mb-3">{{ session('message') }}</h6>
                                        @endif
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <textarea class="form-control" id="comment" rows="4" style="background: #fff;" name="comment" required></textarea>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                            </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>


        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>

        <div class="row mb-3 tm-gallery">
            @foreach ($posts as $item)
            @if ($item->status =='0')
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" style="width: 15%;">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ asset($item->image) }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">

                        <a href="/post-detail/{{ $item->id }}">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{ $item->created_at }}</span>
                    <b>{{ $item->user->name }}</b>
                </div>
            </div>
            @else
                @continue
            @endif
                
            @endforeach


        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->
@endsection

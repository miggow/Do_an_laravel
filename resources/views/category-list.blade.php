@extends('Admin.dashboard')
@section('main-content')
    <div class="categories-list" style="margin-left: 20%; margin-top: 5%;">
        <div></div>
        <h1>Categories List</h1>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                @foreach ($category as $category)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>

                                <a href="{{ route('category.edit', $category) }}"><input class="btn btn-primary"
                                        type="submit" value="Edit"></a>
                            </td>
                            <td>
                                <form action="{{ route('category.delete', $category) }}" >
                                    
                       
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>


                    </tbody>
                @endforeach
            </table>
            {{-- <div class="item">
                <p>{{ $category->name }}</p>
                <div>
                    <a href="{{ route('category.edit', $category) }}">Edit</a>
                </div>
                <form action="{{route('category.delete', $category)}}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete">
                </form>
            </div> --}}

            <div class="index-categories">
                <a style="text-decoration: none;" href="{{ route('category.create') }}">Tạo category<span>&#8594;</span></a>
            </div>
        </div>

    </div>
@endsection

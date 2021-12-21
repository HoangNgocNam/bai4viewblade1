@extends("backend.layout.master")
@section("title","posts Manager");
@section("title-content", "post manager");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách post</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu Đề</th>
                        <th>Nội dung</th>
                        <th>Ngày Viết</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->post_time }}</td>
{{--                            <td><a href="{{ route("posts.detail", $post->id ) }}">Detail</a></td>--}}
                            <td><a href="{{ route("posts.update", $post->id ) }}">Update</a></td>
                            <td><a onclick="return confirm('Xóa nhé bạn!!!')" href="{{ route("posts.delete", $post->id ) }}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

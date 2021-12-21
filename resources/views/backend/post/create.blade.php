@extends("backend.layout.master")
@section("title","posts Manager");
@section("title-content", "post manager");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Mới</h6>
        </div>
        <div class="card-body">
            <form method="post" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu Đề">
                    {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội Dung</label>
                    <input type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Nội Dung">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày viết</label>
                    <input type="date" name="post_time" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/yyyy">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{route("posts.index")}}">Quay lại</a>
            </form>
        </div>
    </div>
@endsection

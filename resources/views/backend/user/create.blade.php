{{--<form action="" method="post">--}}
{{--    <h1>Thêm Mới</h1>--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Nhập tên">--}}
{{--    <input type="text" name="email" placeholder="Nhập Email">--}}
{{--    <input type="date" name="birthday" placeholder="Nhập Ngày Sinh">--}}
{{--    <input type="text" name="address" placeholder="Nhập Địa chỉ">--}}
{{--    <button type="submit">Add New</button>--}}
{{--    <a href="{{ route("users.index") }}">Trở lại</a>--}}
{{--</form>--}}
@extends("backend.layout.master")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Mới</h6>
        </div>
        <div class="card-body">
            <form method="post" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hoàng Văn A">
{{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="hoang@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày Sinh</label>
                    <input type="date" name="birthday" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-warning" href="{{route("users.index")}}">Quay lại</a>
            </form>
        </div>
    </div>
@endsection

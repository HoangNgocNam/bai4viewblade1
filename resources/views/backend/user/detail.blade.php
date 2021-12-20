{{--<h1>Chi tiết</h1>--}}
{{--<a href="{{ route("users.index") }}">Quay lại</a>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Họ và Tên</th>--}}
{{--        <th>Email</th>--}}
{{--        <th>Ngày sinh</th>--}}
{{--        <th>Địa chỉ</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--        <tr>--}}
{{--            <td>{{ $user->id }}</td>--}}
{{--            <td>{{ $user->name }}</td>--}}
{{--            <td>{{ $user->email }}</td>--}}
{{--            <td>{{ $user->birthday }}</td>--}}
{{--            <td>{{ $user->address }}</td>--}}
{{--        </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}

@extends("backend.layout.master")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Chi tiết</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hoàng Văn A" value="{{ $user->name  }}" readonly>
                    {{--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="hoang@gmail.com" value="{{ $user->email  }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày Sinh</label>
                    <input type="date" name="birthday" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/yyyy" value="{{ $user->birthday  }}" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ" value="{{ $user->address  }}" readonly>
                </div>
                <a href="{{ route("users.index") }}">Quay lại</a>
            </form>
        </div>
    </div>
@endsection

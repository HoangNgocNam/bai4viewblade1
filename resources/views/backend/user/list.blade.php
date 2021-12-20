{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Hiển thị danh sách</h1>--}}
{{--<a href="{{ route("users.create") }}">Thêm Mới</a>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Họ và Tên</th>--}}
{{--        <th>Email</th>--}}
{{--        <th>Ngày sinh</th>--}}
{{--        <th>Địa chỉ</th>--}}
{{--        <th colspan="3">Action</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($users as $user)--}}
{{--        <tr>--}}
{{--            <td>{{ $user->id }}</td>--}}
{{--            <td>{{ $user->name }}</td>--}}
{{--            <td>{{ $user->email }}</td>--}}
{{--            <td>{{ $user->birthday }}</td>--}}
{{--            <td>{{ $user->address }}</td>--}}
{{--            <td><a href="{{ route("users.detail", $user->id ) }}">Detail</a></td>--}}
{{--            <td><a href="{{ route("users.update", $user->id ) }}">Update</a></td>--}}
{{--            <td><a onclick="return confirm('Xóa nhé bạn!!!')" href="{{ route("users.delete", $user->id ) }}">Delete</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}
{{--</html>--}}

@extends("backend.layout.master")
@section("title","users Manager");
@section("title-content", "User manager");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách user</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ và Tên</th>
                        <th>Emai</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->address }}</td>
                                <td><a href="{{ route("users.detail", $user->id ) }}">Detail</a></td>
                                <td><a href="{{ route("users.update", $user->id ) }}">Update</a></td>
                                <td><a onclick="return confirm('Xóa nhé bạn!!!')" href="{{ route("users.delete", $user->id ) }}">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>   
                </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->full_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->address}}</td>
                <td>
                    <a href="/admin/users/list" onclick="changeRole({{$user->id}}, '/admin/users/list')">
                    {!! \App\Helpers\Helper::isAdmin($user->is_admin) !!}
                    </a>
                </td> 
            </tr>
                @endforeach
        </tbody>
    </table>

    
@endsection
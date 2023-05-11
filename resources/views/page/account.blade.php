@extends('base')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thông tin tài khoản</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('index')}}">Trang chủ</a> / <span>Thông tin người dùng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="a    ">
                        <li><a href="">Thông tin người dùng</a></li>
                        <li><a href="">Danh sách đơn hàng</a></li>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <form action="" method="POST">Thông tin người dùng
                        <div class="card-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Họ và tên</label>
                                    <input type="text" name="full_name" value="{{ $user->full_name}}" class="form-control">
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Số điện thoại</label>
                                <input type="number" name="phone_number" value="{{$user->phone_number}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Address">Địa chỉ</label>
                                <input type="text" name="address" value="{{$user->address}}" class="form-control">
                            </div>
                        </div>
                        <button type="submit">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
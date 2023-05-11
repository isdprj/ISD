@extends('base')
@section('content')
<div class="space25">&nbsp;</div>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đăng ký</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{route('index')}}">Trang chủ</a> / <span>Đăng ký</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <form action="{{route('register')}}" method="post" class="beta-form-checkout">
            @csrf
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-sm-3"></div>
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>  
                @endif
                @if (Session::has('echo'))
                    <div class="alert alert-success">
                        {{Session::get('echo')}}
                    </div>
                @endif
                <div class="col-sm-6">  
                    <h6><b>Đăng ký biểu mẫu</b></h6>
                    <div class="space20">&nbsp;</div>

                    
                    <div class="form-block">
                        <label for="email"><b>Địa chỉ email*</b></label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name"><b>Họ và tên*</b></label>
                        <input type="text" name="fullname" required>
                    </div>

                    <div class="form-block">
                        <label for="address"><b>Địa chỉ*</b></label>
                        <input type="text" name="address" placeholder="Đường, Xã/ Phường, Quận/ Thị Xã, Thành Phố/ Tỉnh" required>
                    </div>


                    <div class="form-block">
                        <label for="phone"><b>Số điện thoại*</b></label>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="form-block">
                        <label for="phone"><b>Mật khẩu*</b></label>
                        <input type="text" name="password" required>
                    </div>
                    <div class="form-block">
                        <label for="phone"><b>Xác nhận mật khẩu*</b></label>
                        <input type="text" name="re_password" required>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
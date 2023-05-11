@extends('base')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width: 100px">Mã đơn</th>
            <th>Ngày đặt</th>
            <th>Mặt hàng</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tình trạng</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>ID</td>
            <td>{{ $bills->id }}</td>
        </tr>
        <tr>
            <td>Danh sách mặt hàng</td>
            <td>

                <table>
                    <thead>
                        <tr>
                            <th>Tên mặt hàng</th>
                            <th>Giá</th>
                            <th>Giá gốc</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($detailProduct as $dt)
                        <tr>
                            <td>{{$dt->name}}</td>
                            @if ($dt->promotion_price > 0)
                                <td>{{number_format($dt->promotion_price)}}</td>
                            @endif
                            <td>{{number_format($dt->unit_price)}} đ</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </td>
        </tr>
    </tbody>
</table>
@endsection
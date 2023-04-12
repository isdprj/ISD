@extends('base')
@section('content')
    <form action="" method="post" class="beta-form-checkout">
        <div class="col-sm-6">
            <h4>Nhap thong tin san pham</h4>
            <div class="space20">&nbsp;</div>
            <div class="form-block">
                <label for="name"> Ten san pham* </label>
                <input type="text" name="name" required>
            </div>
            <div class="form-block">
                <label for="product_categories"> Loai san pham* </label>
                <input type="text" name="product_categories" id="product_categories" required>
                <datalist id = "product_categories">
                    @foreach ($productType as $pt)
                        <option value="{{$pt->name}}"></option>
                    @endforeach
                </datalist>
            </div>
            <div class="form-block">
                <label for="description"> Mo ta* </label>
                <input type="text" name = "description">
            </div>
            <div class="form-block">
                <label for="stats"> Thong so* </label>
                <input type="text" name = "stats">
            </div>
            <div class="form-block">
                <label for="unit_price"> Gia ca* </label>
                <input type="number" name = "unit_price">
            </div>
            
        </div>
    </form>
@endsection
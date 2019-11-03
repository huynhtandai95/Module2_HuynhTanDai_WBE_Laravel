@extends('layouts.DefaulfPage')
@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Thông tin Đặt Phòng</h2>

                </div>
                <form action="{{route('storeOrder',$Service->id)}}" method="post">
                    @csrf

                    <div class="products">
                        <h3 class="title">Checkout</h3>
                        <div >
                            <span class="price">{{$Service->NameService}}</span>
                            <p class="item-name">Tên Dịch Vụ: </p>
                        </div>
                        <div >
                            <span class="price">{{$Service->NumberFloors}} Tầng</span>
                            <p class="item-name">Số Tầng</p>

                        </div>
                        <div >
                            <span class="price">{{$Service->MaxPeople}} Người</span>
                            <p class="item-name">Số Người Tối đa</p>
                        </div>
                        <div >
                            <span class="price">{{$Service->AreaPool}} m<sub>2</sub></span>
                            <p class="item-name">Diện tích hồ bơi </p>
                        </div>
                        <div >
                            <span class="price">{{$Service->AreaUsed}} m<sub>2</sub></span>
                            <p class="item-name">Diện tích sử dụng</p>
                        </div>
                        <div >
                            <span class="price">{{$Service->Standard}}</span>
                            <p class="item-name">Tiêu chuẩn </p>
                        </div>
                    </div>
                    <div class="card-details">
                        <h3 class="title">Thời Gian Thuê</h3>
                        <div class="row">
                            <div class="form-group col-sm-7">
                                <label for="card-holder">Ngày Bắt Đầu</label>
                                <input id="card-holder" type="date" class="form-control" name="dateStart" required>
                            </div>

                            <div class="form-group col-sm-7">
                                <label for="card-number">Ngày Kết thúc</label>
                                <input id="card-number" type="date" class="form-control" name="dateEnd" required>
                            </div>

                            <div class="form-group col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">Đặt Phòng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection


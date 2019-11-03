@extends('layouts.DefaulfPage')
@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
        <section class="payment-form dark">
            <div class="container">
                @if (Session::has('orderSuccess'))
                    <div class="alert alert-warning alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ Session::get('orderSuccess')}}</strong>
                    </div>
                @endif
                <div class="block-heading">
                    <h2>Hóa Đơn</h2>

                </div>
                    <form>
                    <div class="products">
                        <h3 class="title">Thông tin hóa đơn</h3>
{{--                        <div >--}}
{{--                            <span class="price">#{{$Service->NameService}}</span>--}}
{{--                            <p class="item-name">Mã Hóa Đơn: </p>--}}
{{--                        </div>--}}
                        <div >
                            <span class="price">{{$service->NameService}}</span>
                            <p class="item-name">Tên Dịch Vụ Thuê: </p>
                        </div>

                        <div >
                            <span class="price">{{$dateFrom}}</span>
                            <p class="item-name">Thời Gian Bắt Đầu Thuê:</p>
                        </div>
                        <div >
                            <span class="price">{{$dateTo}}</span>
                            <p class="item-name">Thời Gian Kết Thúc:</p>
                        </div>
                        <div >
                            <span class="price">{{$totalTime}} Ngày</span>
                            <p class="item-name">Số ngày thuê:</p>

                        </div>
                        <div >
                            <span class="price">{{number_format($totalPrice)}} VND</span>
                            <p class="item-name">Tổng Giá Tiền:</p>
                        </div>

                    </div>
                    <div class="card-details">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <a href="{{route('service')}}"><button type="button" class="btn btn-primary btn-block">Hoàn Tất</button> </a>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>

        </section>
    </section>
@endsection


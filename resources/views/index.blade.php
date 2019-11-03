@extends('layouts/DefaulfPage')
@section('navbar')
    @parent

@endsection
@section('body')

    <section class="probootstrap-cover">    {{--Sử dụng Cover_bg--}}
        {{--<section class="item" style="background-image:url(../images/cover_bg.svg)">--}}
        <div class="container">
            <div class="row probootstrap-vh-100 align-items-center text-center">
                <div class="col-sm">
                    <div class="probootstrap-text">
                        <h1 class="probootstrap-heading text-white mb-5">Furama Resort Đà Nẵng.</h1>
                        <div class="probootstrap-subheading mb-5">
                            <p class="h4 font-weight-normal">Khu nghỉ mát biển ẩm thực tọa lạc trên một trong sáu bãi
                                biễn đẹp nhất hành tinh <u>furamavietnam.com</u></p>
                        </div>
                        <p><a href="{{route('service')}}" class="btn btn-primary mr-2 mb-2">Dịch Vụ</a>
                            <a href="{{route('service')}}" class="btn btn-primary btn-outline-white mb-2">Đặt
                                Phòng</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md pr-md-5 pr-0 mb-5">
                    <h1 class="mb-4 display-5">FURAMA ĐÀ NẴNG</h1>
                    <div class="probootstrap-item mb-4">
                        <h3>Khu nghỉ dưỡng đẵng cấp thế giới</h3>
                        <p>Hướng ra bãi biển Đà Nẵng trải dài cát trắng, Furama Resort Đà Nẵng là cửa ngõ đến với 3 di
                            sản văn hoá thế giới: Hội An (20 phút), Mỹ Sơn (90 phút) và Huế (2 tiếng. 196 phòng hạng
                            sang cùng với 70 căn biệt thự từ hai đến bốn phòng ngủ có hồ bơi riêng đều được trang trí
                            trang nhã, theo phong cách thiết kế truyền thống của Việt Nam và kiến trúc thuộc địa của
                            Pháp</p>
                    </div>
                    <div class="probootstrap-item mb-4">
                        <h3>Các Loại Phòng</h3>
                        <p>Khu nghỉ dưỡng có 196 phòng được thiết kế theo phong cách truyền thống Việt Nam kết hợp với
                            phong cách Pháp, 2 tòa nhà 4 tầng có hướng nhìn ra biển, nhìn ra hồ bơi trong xanh và những
                            khu vườn nhiệt đới xanh tươi mát</p>
                    </div>
                    <div class="probootstrap-item mb-4">
                        <h3>Trải nghiệm ẩm thực & giải trí</h3>
                        <p>Khu nghỉ dưỡng Furama Đà Nẵng là một khu nghỉ dưỡng 5 sao sang trọng, có uy tín và được xem
                            là một trong những biểu tượng của ngành du lịch Việt Nam.</p>
                    </div>
                </div>
                <div class="col-md pl-md-5 pl-0 probootstrap-image-grid">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="probootstrap-img-item" href="#"><span class="icon icon-plus"></span>
                                <div style="background-image: url({{asset('/images/item/item_1.jpg')}});"></div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="probootstrap-img-item" href="#"><span class="icon icon-plus"></span>
                                <div style="background-image: url({{asset('/images/item/item_2.jpg')}});"></div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="probootstrap-img-item" href="#"><span class="icon icon-plus"></span>
                                <div style="background-image: url({{asset('/images/item/item_3.jpg')}});"></div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="probootstrap-img-item" href="#"><span class="icon icon-plus"></span>
                                <div style="background-image: url({{asset('/images/item/item_4.jpg')}});"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div id="myCarousel" class="carousel slide border" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('/images/slide_1.jpg ')}}" alt="GiaiTri">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('/images/slide_2.jpg ')}}" alt="AmThuc">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('/images/slide_3.jpg ')}}" alt="SuKien">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="media mb-md-0 mb-3">
                        <div class="probootstrap-icon"><span class="icon-fingerprint display-4"></span></div>
                        <div class="media-body">
                            <h5 class="mt-0">KHU NGHỈ DƯỠNG ĐẲNG CẤP THẾ GIỚI</h5>
                            <p>Khu nghỉ dưỡng Furama Đà Nẵng là một khu nghỉ dưỡng 5 sao sang trọng, có uy tín và được
                                xem là một trong những biểu tượng của ngành du lịch Việt Nam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media mb-md-0 mb-3">
                        <div class="probootstrap-icon"><span class="icon-users display-4"></span></div>
                        <div class="media-body">
                            <h5 class="mt-0">DỊCH VỤ & CƠ SỞ VẬT CHẤT</h5>
                            <p>
                                Có nhiều những gói nghỉ dưỡng phù hợp cho cả những kỳ nghỉ ngắn hay dài ngày
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="media mb-md-0 mb-3">
                        <div class="probootstrap-icon"><span class="icon-chat display-4"></span></div>
                        <div class="media-body">
                            <h5 class="mt-0">DỊCH VỤ ĐÓN TIỄN SÂN BAY</h5>
                            <p>Tận hưởng những sự thoải mái, tiện lợi và hoàn hảo ngay từ những giây phút đầu tiên của
                                kỳ nghỉ khi hạ cánh tại Sân bay Quốc tế Đà Nẵng với dịch đón tiễn sân bay chuyên nghiệp,
                                thân thiện và sang trọng từ chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

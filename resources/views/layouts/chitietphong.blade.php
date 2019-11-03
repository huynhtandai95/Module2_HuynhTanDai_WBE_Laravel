@extends('layouts/DefaulfPage')
@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
        <div class="container">
            <div class="title-wrap text-center">
                <h1 style="color: #CBBE73">@yield('nameService')</h1>
                <div class="h-decor"></div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="@yield('slide1')" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="@yield('slide2')" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="@yield('slide3')" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>
    <section class="probootstrap-section">
        <div class="container">
            <div class="info-grid">
                <div class="row align-items-center">
                    <div class="col-6 col-sm">
                        <div class="info-grid-label">Diện Tích Phòng</div>
                        <div class="info-grid-text text-primary"> <b> @yield('areaUsed') m<sup>2</sup></b></div>
                    </div>
                    <div class="col-6 col-sm">
                        <div class="info-grid-label">Số người Tối đa</div>
                        <div class="info-grid-text text-primary"><b> @yield('maxPeople')</b></div>
                    </div>
                    <div class="col-6 col-sm">
                        <div class="info-grid-label">Giá Thuê</div>
                        <div class="info-grid-text text-primary"><b> @yield('price')</b></div>
                    </div>
                    <div class="col-6 col-sm">
                        <div class="info-grid-label">Tiêu Chuẩn</div>
                        <div class="info-grid-text text-primary"><b> @yield('Standard')</b></div>
                    </div>
                </div>
            </div>
            <div class="mt-3 mt-md-7"></div>
            <h2 > <b style="color: #CBBE73">Chi Tiết Phòng </b></h2>
            @section('mota')
            <p>
            <p>Được trang trí với tông màu dịu nhẹ kết hợp với những đồ thủ công trang trí mang đậm hơi thở văn hóa Chăm-pa của địa phương, căn phòng được chia tầng rõ rệt. Ở dưới là khu vực sinh hoạt với ghế sofa chữ L và ở trên là giường ngủ tạo cảm giác trang nhã mà rất thân thuộc như ở nhà.</p>
            <p>Đệm lụa và khăn trải giường cùng gối xa hoa làm tăng sự sang trọng và quyến rũ trong cá tính của chính căn phòng tuyệt đẹp này.</p>
            <p>Diện tích: 80.5 m2 kết nối với ban công rộng 24 m2.</p>
            <p>Tối đa: 2 người lớn và 1 trẻ em ngủ chung giường với ba mẹ.</p>
            </p>
            @show
            <div class="mt-3 mt-md-5"></div>
            <h2><b style="color: #CBBE73">Tính Năng Phòng</b></h2>


            <div class="row">
                <div class="col-md-4">
                    <ul class="marker-list">
                        <li>Ăn Sáng : <span>Miễn Phí</span></li>
                        <li>Két sắt: <span>YES</span></li>
                        <li>Thang Máy: <span>NO</span></li>
                        <li>TV: <span>YES</span></li>
                        <li>Hướng Phòng: <span>Biển Bắc Mỹ An</span></li>
                    </ul>
                </div>
                <div class="col-md-8 mt-4 mt-md-0">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="icn-text-sm">
                            <div class="icn-text-circle"><i class="icon-wifi"></i></div>
                            <div>WiFi Miễn Phí :
                                <br><span>YES</span></div>
                        </div>
                        <div class="icn-text-sm">
                            <div class="icn-text-circle"><i class="icon-hair-dryer"></i></div>
                            <div>Máy Sấy Tóc:
                                <br><span>YES</span></div>
                        </div>
                        <div class="icn-text-sm">
                            <div class="icn-text-circle"><i class="icon-air-conditioner"></i></div>
                            <div>Máy Điều Hòa:
                                <br><span>YES</span></div>
                        </div>
                        <div class="icn-text-sm">
                            <div class="icn-text-circle"><i class="icon-cocktail"></i></div>
                            <div>Minibar:
                                <br><span>YES</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <a href="/service" ><button class="btn btn-light">Trở Lại</button></a>
                </div>
            <div class="col-2">

             <a href="/service/order/@yield('orderIdService')"><button class="btn btn-info">Đặt Phòng</button> </a>
            </div>

            </div>
        </div>
        </div>


    </section>
@endsection

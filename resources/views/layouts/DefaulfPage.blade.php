<!DOCTYPE html>
<html lang="en">
<head>
    <title>FURAMA RESORT DA NANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href=" {{asset('css/style.css')}}">
    <link rel="stylesheet" href=" {{asset('css/payment.css')}}">
</head>
<body>

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark probootstrap-navabr-dark">
        <a class="navbar-brand" href="/">
            <img src="https://furamavietnam.com/wp-content/uploads/2018/10/logo.png" style="width:40px;">
        </a>
        <div class="container">
            <div class="collapse navbar-collapse" id="probootstrap-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{Route('index')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle " data-toggle="dropdown">Services
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('listVilla')}}"> Villa</a>
                                <a class="dropdown-item" href="{{route('listHouse')}}"> House</a>
                                <a class="dropdown-item" href="{{route('listRoom')}}"> Room</a>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{Route('review')}}" class="nav-link">Review</a></li>
                </ul>
                @show
                {{--Check LOgin --}}

                @guest
{{--                @if(!isset($userLogin))--}}
                    <ul class="navbar-nav ml-auto">
                        <li><a href="{{Route('login')}}" class="btn btn-primary btn-outline-white mb-2">Log In</a></li>

                        <li><a href="{{Route('register')}}" class="btn btn-primary btn-outline-white mb-2">Sign up</a></li>
                    </ul>
                @else
                    <ul class="navbar-nav ml-auto">
                        <li><a href="#" class="btn btn-primary btn-outline-white mb-2">{{Auth::user()->fullName }}</a></li>
                        <li><a href="{{route('logout')}}" class="btn btn-primary btn-outline-white mb-2">Log Out</a></li>
                    </ul>
{{--                @endif--}}
                @endguest

            </div>
        </div>
    </nav>

@yield('body')
<footer class="probootstrap-footer">
    <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">FURAMA RESORT</h6>
                <p>Khu nghỉ dưỡng Furama là cơ sở hàng đầu để khám phá một
                    trong những điểm đến hấp dẫn nhất Châu Á.</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                    <a href="#">Giá Công Bố</a>
                </p>
                <p>
                    <a href="#">Lifestyle Blog</a>
                </p>
                <p>
                    <a href="#">Tuyển Dụng</a>
                </p>
                <p>
                    <a href="#">Liên Hệ</a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->


            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="icon-fas fa-home mr-3"></i> 103 – 105 Đường Võ Nguyên Giáp, Phường Khuê Mỹ, Quận Ngũ hành Sơn, Tp. Đà Nẵng, Việt Nam</p>
                <p>
                    <i class="icon-email fas fa-envelope mr-3"></i> reservation@furamavietnam.com </p>
                <p>
                    <i class="icon-phone fas fa-phone mr-3"></i> 84-236-3847 333/888 </p>
                <p>
                    <i class="icon-phone fas fa-print mr-3"></i> 84-236-3847 666</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <!-- Grid row -->
        <div class="row d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left">© 2019 Madeby:
                    <a href="https://mdbootstrap.com/education/bootstrap/">
                        <strong> HUYNH TAN DAI</strong>
                    </a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->
</footer>
<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" type="dfae7ff82fa6c4b4bf593e29-text/javascript"></script>
<script src="{{asset('js/popper.min.js')}}" type="dfae7ff82fa6c4b4bf593e29-text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="dfae7ff82fa6c4b4bf593e29-text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="dfae7ff82fa6c4b4bf593e29-text/javascript"></script>
<script src="{{asset('js/plugin.js')}}"></script>
<script src="{{asset('https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="dfae7ff82fa6c4b4bf593e29-|49" defer=""></script>
</body>


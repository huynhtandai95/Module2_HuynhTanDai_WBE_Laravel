@extends('layouts.DefaulfPage')

@section('navbar')
    @parent
@endsection
@section('body')

    <section class="probootstrap-section">
        <div class="container">
            <h1 style="text-align:center"> <a href="#"> DANH SÁCH DỊCH VỤ ƯU THÍCH</a>

            </h1>
            <div class="col-12" style="text-align: center">
                @if (Session::has('searchStatus'))
                    <div class="alert alert-info alert-dismissible ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ Session::get('searchStatus')}}</strong>
{{--                        <span>  {{number_format($searchFrom)}} VND đến {{number_format($searchTo)}} VND</span>--}}
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{route('searchService')}}" class="form-inline mr-auto" method="get">
                        @csrf
                        <span class="mr-sm-2">Giá từ </span>
                        <input class="form-control mr-sm-1" type="text" placeholder="Nhập Giá Tiền" name="searchFrom" data-type="currency">
                        <span class="mr-sm-2">Đến </span>
                        <input class="form-control mr-sm-1" type="text" placeholder="Nhập Giá Tiền" name="searchTo" data-type="currency">
                        <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Tìm Kiếm</button>
                        <a href="{{route('viewList')}}"class="btn btn-outline-secondary">Danh sách yêu thích</a>
                    </form>

                </div>
            </div>

        </div>


        <!-- Bootstrap table and table-bordered classes -->
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</td>
                <th scope="col">Dịch Vụ</td>
                <th scope="col">Diện Tích</td>
                <th scope="col">Số Người</td>
                <th scope="col">Tiêu Chuẩn</td>
                <th scope="col">Tiẹn ích khác</td>
                <th scope="col">Số tầng</td>
                <th scope="col">Diện tích hồ bơi</td>
                <th scope="col">Giá (VND)</td>
                <th scope="col"></td>


            </tr>
            </thead>

            <tbody>

            @if(session('list') )
            @foreach(session('list') as $id=>$Service)
                <tr>

                    <th scope="row">{{ $loop->iteration  }} </td>
                    <td>{{$Service['NameService']}}</td>
                    <td>{{$Service['AreaUsed']}}</td>
                    <td>{{$Service['MaxPeople']}}</td>
                    <td> {{$Service['Standard']}}</td>
                    <td>{{$Service['Convenient']}}</td>
                    <td>{{$Service['NumberFloors']}}</td>
                    <td>{{$Service['AreaPool']}}</td>
                    <td>{{number_format($Service['Price'])}}</td>
                    <td>
{{--                        <a href="#" class="badge btn-info">Bỏ Thích</a>--}}

                    </td>

                </tr>
            @endforeach
                @endif
            </tbody>
        </table>
        </div>
    </section>
@endsection


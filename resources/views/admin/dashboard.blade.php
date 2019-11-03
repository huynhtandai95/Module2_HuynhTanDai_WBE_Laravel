@extends('layouts.DefaulfPage')

@section('navbar')
    @parent
@endsection

@section('body')

    <section class="probootstrap-section">

        <div class="container">
            <h1 style="text-align:center;color:green;">
             <a href="{{route('listServicesbyadmin')}}">DANH SÁCH DỊCH VỤ</a>
            </h1>
            <div class="col-12" style="text-align: center">
                @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible ">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ Session::get('status')}}</strong>
                    </div>
                @endif
            </div>
            <div class="row mb-3">
                <div class="col-md-8">

                    <form action="{{route('searchServicesbyadmin')}}" class="form-inline mr-auto" method="get">
                        @csrf
                        <span class="mr-sm-2">Giá từ </span>
                        <input class="form-control mr-sm-1" type="text" placeholder="Nhập Giá Tiền (VND)" name="searchFrom" data-type="currency">
                        <span class="mr-sm-2">Đến </span>
                        <input class="form-control mr-sm-1" type="text" placeholder="Nhập Giá Tiền (VND)" name="searchTo" data-type="currency">
                        <button class="badge-info" type="submit">Tìm Kiếm</button>

                    </form>
                </div>
                <div class="col-md-2 mt-2">

                    <div class="dropdown">
                        <button class="badge-info dropdown-toggle" type="button"  data-toggle="dropdown" >
                            Lọc Dịch Vụ
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('filterVilla')}}">Villa</a>
                            <a class="dropdown-item" href="{{route('filterHouse')}}">House</a>
                            <a class="dropdown-item" href="{{route('filterRoom')}}">Room</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 mt-2">
                  <a  href="{{route('addService')}}"><button type="submit" class="btn btn-info ">Thêm mới</button></a>
                </div>
            </div>

            <!-- Bootstrap table and table-bordered classes -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">STT</td>
                    <th scope="col">Dịch Vụ</td>
                    <th scope="col">Loại Dịch Vụ</td>
                    <th scope="col">Diện Tích</td>
                    <th scope="col">Số Người</td>
                    <th scope="col">Tiêu Chuẩn</td>

                    <th scope="col">Số tầng</td>
                    <th scope="col">Diện tích hồ bơi</td>
                    <th scope="col">Giá (VND)</td>
                    <th scope="col"></td>
                    <th scope="col"></td>

                </tr>
                </thead>

                <tbody>
                @foreach($Services as $key=>$Service)
                    <tr>
                        <th scope="row">{{++$key}}</td>
                        <td >{{$Service->NameService}}</td>
                        <td>{{$Service->TypeOfService->NameService}}</td>
                        <td>{{$Service->AreaUsed}}</td>
                        <td>{{$Service->MaxPeople}}</td>
                        <td> {{$Service->Standard}}</td>

                        <td>{{$Service->NumberFloors}}</td>
                        <td>{{$Service->AreaPool}}</td>
                        <td>{{number_format($Service->Price)}}</td>
                        <td><a href="{{route('deleteServices',$Service->id)}}" class="badge btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa? \n {{$Service->NameService}}')">Xóa</a></td>
                        <td><a href="{{route('editServices',$Service->id)}}" class="badge btn-success">Chỉnh sửa</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection


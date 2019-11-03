@extends('layouts.DefaulfPage')

@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <button type="button" class="" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
        <div id="demo" class="collapse">
        <div class="list-group" id="list-tab" >
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="collapse" href="#list-home" role="tab" aria-controls="home">Home</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="collapse" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
        </div>
        </div>
        <button type="button" class="" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
        <div id="demo" class="collapse">
            <div class="list-group" id="list-tab" >
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="collapse" href="#list-home" role="tab" aria-controls="home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="collapse" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
            </div>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">

                <div class="container col-12">
                    <h1 style="text-align:center;color:green;">
                        DANH SÁCH DỊCH VỤ
                    </h1>
                    <div class="col-12" style="text-align: center">
                        @if (Session::has('status'))
                            <div class="alert alert-success alert-dismissible ">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{ Session::get('status')}}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="search-box">
                                <form class="search-form" action="http://hocwebgiare.com/">
                                    <input class="form-control" placeholder="Bootstrap, RWD, HTML5, CSS3" type="text">
                                    <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <select name="select-category">
                                <option class="disabled">--Lọc Dịch Vụ--</option>
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                                <option value="category3">Category 3</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a  href="{{route('addService')}}"><button type="submit" class="btn btn-outline-primary">Thêm mới</button></a>
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
                            <th scope="col"></td>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($Services as $key=>$Service)
                            <tr>
                                <th scope="row">{{++$key}}</td>
                                <td >{{$Service->NameService}}</td>
                                <td>{{$Service->AreaUsed}}</td>
                                <td>{{$Service->MaxPeople}}</td>
                                <td> {{$Service->Standard}}</td>
                                <td>{{$Service->Convenient}}</td>
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

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
    </section>
@endsection

@extends('layouts.DefaulfPage')
@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
        <div class="container">
            <h1 style="text-align: center">CHỈNH SỬA DỊCH VỤ</h1>

            <form action="{{route('updateServices',$Service->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Tên Dịch Vụ</label>
                    <input type="text" class="form-control" rows="3" name="NameService" value="{{$Service->NameService}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="Description" rows="6" >{{$Service->Description}}</textarea>

                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Số Tầng</label>
                            <input type="text" class="form-control" name="NumberFloors" value="{{$Service->NumberFloors}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Số Người Tối đa</label>
                            <input type="text" class="form-control" name="MaxPeople" value="{{$Service->MaxPeople}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Diện tích hồ bơi</label>
                            <input type="text" class="form-control" name="AreaPool" value="{{$Service->AreaPool}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Diện tích sử dụng</label>
                            <input type="text" class="form-control" name="AreaUsed" value="{{$Service->AreaUsed}}">
                        </div>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label>Tiện Nghi Khác</label>
                        <select name="Convenient" class="form-control">
                            <option selected>----</option>
                            <option value="Có">Có</option>
                            <option value="Không">Không</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Tiêu chuẩn</label>
                        <select class="form-control" name="Standard" >
                            <option >--Chọn Tiêu chuẩn--</option>

                            <option value="1 Sao">1 sao</option>
                            <option value="2 Sao">2 sao</option>
                            <option value="3 Sao">3 sao</option>
                            <option value="4 Sao">4 sao</option>
                            <option value="5 Sao">5 sao</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Loại Dịch vụ</label>
                        <select class="form-control" name="TypeOfService_id">
                            <option selected>--Chọn Loại Dịch vụ--</option>
                            <option value="1">Villa</option>
                            <option value="2">House</option>
                            <option value="3">Room</option>

                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label>Giá (Đơn vị: VND)</label>
                    <input type="text" class="form-control" data-type="currency" name="Price" value="{{$Service->Price}}">
                </div>

                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </form>
        </div>
    </section>
@endsection


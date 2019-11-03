@extends('layouts.DefaulfPage')
@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
        <div class="container">

            <h1 style="text-align: center">THÊM MỚI DỊCH VỤ</h1>
            <form action="{{route('storeService')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Tên Dịch Vụ</label>
                    <input type="text" class="form-control" rows="3" name="NameService" placeholder="">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" name="Description" rows="6" placeholder=""></textarea>

                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Số Tầng</label>
                            <input type="text" class="form-control" name="NumberFloors" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Số Người Tối đa</label>
                            <input type="text" class="form-control" name="MaxPeople" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Diện tích hồ bơi</label>
                            <input type="text" class="form-control" name="AreaPool" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Diện tích sử dụng</label>
                            <input type="text" class="form-control" name="AreaUsed" placeholder="">
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
                        <select class="form-control" name="Standard">
                            <option selected>--Chọn Tiêu chuẩn--</option>
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
                    <input type="text" class="form-control" data-type="currency" name="Price" placeholder="">
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </section>
@endsection


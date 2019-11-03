@extends('layouts/DefaulfPage')
@section('navbar')
    @parent
@endsection
@section('body')
    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3> Đánh giá từ khách hàng</h3>
                </div><!-- /col-sm-12 -->
            </div><!-- /row -->
            <div class="row">
                @foreach($comments as $key=>$comment)
                    <div class="col-sm-5 mb-5">
                        <div class="card">
                            <div class="card-header">
                                <strong> {{$comment->users->fullName}}</strong>
                                <span class="text-muted ">commented </span>
                                <span class=" badge-light">{{$comment->created_at}} </span>

                            </div>
                            <div class="card-body">
                                {{$comment->content}}
                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->

                @endforeach
            </div><!-- /row -->
            <div>
                <form action="{{route('reviewPost')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Gửi đánh giá khách sạn</label>
                        <textarea class="form-control" rows="3"
                                  name="contentReview" placeholder="Viết Nội Dung  Tại Đây"></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Gửi đánh giá</button>
                </form>
            </div>
        </div><!-- /container -->
    </section>
@endsection

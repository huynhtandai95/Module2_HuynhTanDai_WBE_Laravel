@extends('layouts.chitietphong')
@section('nameService')
    {{$Services->NameService}}
@endsection

@section('slide1','https://furamavietnam.com/wp-content/uploads/2018/08/Vietnam_Danang_Furama_Villas_Beach_Pool_Villas-Sea-View-768x413.jpg')
@section('slide2','https://furamavietnam.com/wp-content/uploads/2018/08/Vietnam_Danang_Furama_Villas_Beach_Pool_Villas_Bedroom-2-768x413.jpg')
@section('slide3','https://furamavietnam.com/wp-content/uploads/2018/08/Vietnam_Danang_Furama_Villas_Beach_Pool_Villas_Bedroom-1-768x413.jpg')
@section('areaUsed')
    {{$Services->AreaUsed}}
@endsection

@section('maxPeople')
    {{$Services->MaxPeople}}
@endsection

@section('price')
    {{number_format($Services->Price)}} VND
@endsection
@section('Standard')
    {{$Services->Standard}}
@endsection
@section('mota')
    {!! $Services->Description !!}

@endsection
@section('orderIdService')
{{$Services->id}}
@endsection



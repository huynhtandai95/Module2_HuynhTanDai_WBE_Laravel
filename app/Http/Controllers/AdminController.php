<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    function listServicesbyadmin()
    {
        $Services = Services::with('TypeOfService')->get();
        return view('admin.dashboard', compact('Services'));
    }

    function deleteServices($id)
    {
        Services::destroy($id);
        Session::flash('status', 'Xóa Dịch Vụ Thành Công');
        return redirect(route('listServicesbyadmin'));

    }

    function addService()
    {
        return view('services.addService');
    }

    function storeService(Request $request)
    {
        $Service = new Services();
        $Service->NameService = $request->NameService;
        $Service->Description = $request->Description;
        $Service->AreaUsed = $request->AreaUsed;
        $Service->MaxPeople = $request->MaxPeople;
        $Service->Standard = $request->Standard;
        $Service->Convenient = $request->Convenient;
        $Service->NumberFloors = $request->NumberFloors;
        $Service->AreaPool = $request->AreaPool;
        $Service->Price = str_replace(',', '', $request->Price);
        $Service->TypeRent_id = $request->TypeRent_id;
        $Service->TypeOfService_id = $request->TypeOfService_id;
        $Service->save();
        Session::flash('status', 'Đã Thêm Dịch Vụ Thành Công');
        return redirect(route('listServicesbyadmin'));
    }

    function editServicesbyadmin($id)
    {
        $Service = Services::find($id);
        return view('services.editService', compact('Service'));
    }

    function updateServicesbyadmin(Request $request, $id)
    {
        $Service = Services::find($id);
        $Service->NameService = $request->NameService;
        $Service->Description = $request->Description;
        $Service->AreaUsed = $request->AreaUsed;
        $Service->MaxPeople = $request->MaxPeople;
        $Service->Standard = $request->Standard;
        $Service->Convenient = $request->Convenient;
        $Service->NumberFloors = $request->NumberFloors;
        $Service->AreaPool = $request->AreaPool;
        $Service->Price = str_replace(',', '', $request->Price);
        $Service->TypeRent_id = $request->TypeRent_id;
        $Service->TypeOfService_id = $request->TypeOfService_id;
        $Service->save();
        $request->session()->flash('status', 'Chỉnh Sửa Dịch Vụ Thành Công');
        return redirect(route('listServicesbyadmin'));

    }

    function filterVilla()
    {
        $Services = Services::where('TypeOfService_id', '=', '1')->get();
        return view('admin.dashboard', compact('Services'));
    }

    function filterHouse()
    {
        $Services = Services::where('TypeOfService_id', '=', '2')->get();
        return view('admin.dashboard', compact('Services'));
    }

    function filterRoom()
    {
        $Services = Services::where('TypeOfService_id', '=', '3')->get();
        return view('admin.dashboard', compact('Services'));
    }

    function searchByPrice(Request $request)
    {
        $searchFrom = str_replace(',', '', $request->searchFrom);
        $searchTo = str_replace(',', '', $request->searchTo);
        $Services = Services::whereBetween('price', [$searchFrom, $searchTo])->get();
        $request->session()->flash('searchStatus', 'Kết quả tìm kiếm: ');
        return view('admin.dashboard', compact('Services', 'searchTo', 'searchFrom'));
    }
}

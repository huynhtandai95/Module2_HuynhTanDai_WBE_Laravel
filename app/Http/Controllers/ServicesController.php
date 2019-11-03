<?php

namespace App\Http\Controllers;

use App\order_deltais;
use App\Services;
use App\review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    function listServices()
    {
        $Services = Services::with('TypeOfService')->get();
        return view('services.listServices', compact('Services'));
    }

    function showServicesById($id)
    {

        $Services = Services::find($id);
        return view('services/DetailsRoom', compact('Services'));

    }

    function order($id)
    {
        $Service = Services::find($id);
//        $type_rents = TypeRent::all();
        return view('services/Order', compact('Service'));
    }

    function store_Order(Request $request, $id)
    {
        $service = Services::find($id);
        $dateFrom = $request->dateStart;
        $dateTo = $request->dateEnd;
        $dateStart = strtotime($dateFrom);
        $dateEnd = strtotime($dateTo);
        $totalTime = ($dateEnd - $dateStart)/86400;
        $totalPrice = $totalTime* $service->Price;
        $order_Deltais = new order_deltais();
        $order_Deltais->users_id = Auth::user()->id;
        $order_Deltais->services_id = $id;
        $order_Deltais->Price = $totalPrice;
        $order_Deltais->dateStart = $dateFrom;
        $order_Deltais->dateEnd = $dateTo;
        $order_Deltais->save();
            $request->session()->flash('orderSuccess',' Đặt phòng Thành Công');
        return view('services.bill',compact('service','dateFrom','dateTo','totalPrice','totalTime'));
    }


    function searchByPrice(Request $request)
    {
        $searchFrom = str_replace(',', '', $request->searchFrom);
        $searchTo = str_replace(',', '', $request->searchTo);

        $Services = Services::whereBetween('price', [$searchFrom, $searchTo])->get();
        $request->session()->flash('searchStatus', 'Kết quả tìm kiếm: ');
        return view('services.listServices', compact('Services', 'searchTo', 'searchFrom'));


    }

    function listVilla()
    {
        $Services = Services::where('TypeOfService_id', '=', '1')->get();
        return view('services.listServices', compact('Services'));
    }

    function listHouse()
    {
        $Services = Services::where('TypeOfService_id', '=', '2')->get();
        return view('services.listServices', compact('Services'));
    }

    function listRoom()
    {
        $Services = Services::where('TypeOfService_id', '=', '3')->get();
        return view('services.listServices', compact('Services'));
    }

    function addToList($id)
    {
        $Service = Services::find($id);
        $list = session()->get('list');
        if (!$list) {
            $list = [$id => [
                'NameService' => $Service->NameService,
                'AreaUsed' => $Service->AreaUsed,
                'MaxPeople' => $Service->MaxPeople,
                'Standard' => $Service->Standard,
                'Convenient' => $Service->Convenient,
                'NumberFloors' => $Service->NumberFloors,
                'AreaPool' => $Service->AreaPool,
                'Price' => $Service->Price
            ]
            ];
            Session()->put('list', $list);
            Session()->flash('addLikeSuccess', 'Đã Thêm Vào danh sách yêu thích');
            return redirect()->back();
        } else {
            $list[$id] = [
                'NameService' => $Service->NameService,
                'AreaUsed' => $Service->AreaUsed,
                'MaxPeople' => $Service->MaxPeople,
                'Standard' => $Service->Standard,
                'Convenient' => $Service->Convenient,
                'NumberFloors' => $Service->NumberFloors,
                'AreaPool' => $Service->AreaPool,
                'Price' => $Service->Price
            ];
            Session()->put('list', $list);
            Session()->flash('addLikeSuccess', 'Đã Thêm Vào danh sách yêu thích');
            return redirect()->back();
        }


    }

    function viewList()
    {
        return view('viewList');

    }
    function review(Request $request){
        $review = new review();
        $review->content = $request->contentReview;
        $review->users_id= Auth::user()->id ;
        $review->save();
        return redirect(route('review'));

    }
    function  getReview(){
      $comments =  review::with('users')->orderBy('review.created_at','DESC')->get();

      return view('review',compact('comments'));

    }


}


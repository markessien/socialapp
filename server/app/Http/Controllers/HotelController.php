<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    public function index(){

    }
    public function save(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		$hotel = new Hotel;
    		$hotel->save();

    	}
        return view();

    }

    public function list($id=null){
    	$coupons = Hotel::get();
    	return view();
    }


public function edit(Request $request, $id=null){
    $hotel = Hotel::find($id);
        if($request->isMethod('post')){
            $data = $request->all();
            $hotel->save();
            return redirect();

        }

    return view();


}

public function view(Request $request, $id=null){
    $hotel = Hotel::find($id);
        if($request->isMethod('post')){
            $data = $request->all();
            var_dump($data);
            $coupon = CouponCode::find($id);
            return redirect();

        }

    return view();


}

public function delete($id){
  $hotel=Hotel::find($id);
  if ($hotel!=null){ 
  $hotel->delete();
  return redirect('');
}
  return redirect('');
}

}
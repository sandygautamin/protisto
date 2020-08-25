<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;
class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {		
		$orders = Orders::paginate(10);
        return view('admin.orders.index')->with('orders',$orders);
    }
   
	/**
     * Show the form for view the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $order = Orders::find($id);
		 $countries=config('constants.countries');	
        return view('admin.orders.view', compact('order', 'id','countries'));
    }
	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
	public function destroy($id)
    {
		$orders = Orders::find($id);
        $orders->delete();
        return redirect()->route('admin.orders')->with('success', 'Order Removed..');
    }
	
    public function user_orders($user_id=null)
    {		
		if($user_id){
			$orders = Orders::where('user_id', '=', $user_id)->paginate(10);
			return view('admin.orders.index')->with('orders',$orders);
		}
    }
	
}
 
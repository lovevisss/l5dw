<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
class OrderController extends Controller
{

 	public function __construct()
    {
    	$this->middleware('auth');
    }

   	public function getOrder()
   	{
   		$orders = Order::where('user_id', '=', Auth::user()->id)->get();

        return view('order.index', compact('orders'));
   	}


   	public function getOne($id)
   	{
   		$user = Auth::user();
   		$order = Order::find($id);
		$items = OrderItem::with('product')->where('order_id','=',$id)->get();
        
        $total = 0;
		foreach($items as $item)
        {
            $total += $item->product->price*$item->num*(1 - $user->member*0.1);
        }
   		return view('order.one', compact('items','total','order','user'));
   	}


   	public function pay($id)
   	{
   		$order = Order::find($id);
   		$order->status = 1;
   		$order->save();
   		return redirect(route('view_order'));
   	}

   	public function refund($id)
   	{
   		$order = Order::find($id);
   		$order->status = 3;
   		$order->save();
   		return redirect(route('view_order'));
   	}

   		public function confirm_goods($id)
   	{
   		$order = Order::find($id);
   		$order->status = 4;
   		$order->save();
   		// return redirect(route('view_order'));
   		return back();
   	}

   	public  function deliver($id)
   	{
   		$order = Order::find($id);
   		$order->status = 2;
   		$order->save();
   		// return redirect(route('view_order'));
   		return back();
   	}

}

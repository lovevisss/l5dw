<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Shoppingcart;
use App\ShoppingcartItem;
use App\Order;
use App\OrderItem;
use App\Product;
class ShoppingCartController extends Controller
{
     public function __construct()
    {
    	$this->middleware('auth');
    }

    public function add_to_cart($id, $num)
    {
    	// dd($id);
    	if(\Input::get('qty') != 0)
    		{
    			$num = \Input::get('qty');
    		}
    	$cart = Shoppingcart::where('user_id', Auth::user()->id)->first();
    	if(!$cart)
    	{
    		$cart = new Shoppingcart();
    		$cart->user_id = Auth::user()->id;
    		$cart->save();
    	}
        $cartItem = ShoppingcartItem::where('shoppingcart_id','=',$cart->id)->where('product_id','=', $id)->first();
        // dd($cartItem);
        if(!$cartItem)
        {
            $cartItem = new ShoppingcartItem();   
            $cartItem->product_id = $id;
            $cartItem->shoppingcart_id = $cart->id;
            $cartItem->num = $num;
        }
        else{
            $cartItem->num +=$num;
        }
    	
    	$cartItem->save();

    	// return redirect('/cart');    //到购物车页面
    	return back();     //回到原来页面
    }


    public function addMulItem($productId, $request)
    {
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        if(!$cart)
        {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->save();
        }
        $cartItem = new CartItem();
        $cartItem->product_id = $productId;
        $cartItem->cart_id = $cart->id;
        $cartItem->num = $request->get('num');
        $cartItem->save();

        return redirect('/cart');

    }

    public function showCart(){
    	$cart = Shoppingcart::where('user_id', Auth::user()->id)->first();
    	if(!$cart)
    	{
    		$cart = new Shoppingcart();
    		$cart->user_id = Auth::user()->id;
    		$cart->save();
    	}

    	$items = $cart->shoppingcartItems;
        $total = 0;
        // dd($items);
    	foreach($items as $item)
    	{
    		$total += $item->product->price*$item->num;
    	}

    	return view('shoppingcart.index', compact('items','total'));
    }

    public function removeItem($id)
    {
    	// return $id;
    	ShoppingcartItem::destroy($id);
    	return redirect('/cart');
    }

    public function cart_calc(Request $request)
    {
    	// dd($request->input());
    	// 
    	foreach ($request->all() as $key => $value) {
    		$sub = strstr($key, 'check');
    		if($sub)
    		{	
    			if(!isset($order))
    			{
    				$order = new Order();
    				$order->user_id = Auth::user()->id;
    				$order->status = 0;  // 未支付
    				$order->save();
    			}

    		$id = str_replace('check', '', $sub);
    		$product = Product::find($id);
    		if($product->num < $request->get($id))
    		{
    			flash()->overlay('库存不足', '错误');
    			// flash('库存不足')->error();
    			return back();
    		}

    		}
   		}
    	foreach ($request->all() as $key => $value) {  //get 商品id
    		$sub = strstr($key, 'check');
    		if($sub)
    		{	
    			if(!isset($order))
    			{
    				$order = new Order();
    				$order->user_id = Auth::user()->id;
    				$order->status = 0;  // 未支付
    				$order->save();
    			}
    			$id =  str_replace('check', '', $sub);
    			// echo $request->get($id);
    			$orderItem = new OrderItem();   
	            $orderItem->product_id = $id;
	            $orderItem->order_id = $order->id;
	            $orderItem->num = $request->get($id);
	            $orderItem->save();
	            $product = Product::find($id);
	            $product->num -= $request->get($id);
	            $product->save();
	            ShoppingcartItem::where('product_id', '=', $id)->first()->delete();  //删掉对应的购物车内的物品
    		}
    		// echo $key;
    	}
    	return redirect(route('one', $order->id));
    }

    public function checkout(){
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $user = Auth::user();
        $items = CartItem::with('product')->where('cart_id','=',$cart->id)->get();
        // dd($cartItems);
        // if(!$cartItem)
        // {
        //     $cartItem = new CartItem();   
        //     $cartItem->product_id = $productId;
        //     $cartItem->cart_id = $cart->id;
        //     $cartItem->num = 1;
        // }
        // else{
        //     $cartItem->num +=1;
        // }
        
        // $cartItem->save();
        $total = 0;
        foreach($items as $item)
        {
            // dd($item->product());
            $total += $item->product->price*$item->num*(1 - $user->member*0.1);  //会员9折
        }
        $back = 0;
        return view('order', compact('items','total','back','user'));

    }
}

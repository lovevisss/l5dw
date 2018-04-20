<?php 
/**
* 
*/
namespace App\Http\Controllers;
use App\User;
use App\Category;
use App\Product;
use App\Shoppingcart;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
class HomeController extends Controller 
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	
	 // public function index()
  //   {
  //       $categories = Category::with(['products' =>function($query){
  //           $query->orderBy('id','desc');     //只取2个
  //       }])->get();
  //       $products = Product::take(2)->orderBy('created_at', 'DESC')->get();
  //       // var_dump($categories);
  //       // foreach ($categories as $category) {
  //       //     foreach ($category->products as $product) {
  //       //         echo $product->title;
  //       //     }
  //       // }
  //   	// var_dump(\File::get(public_path().'/robots.txt'));

  //       return view('index')
  //       ->with('categories', $categories)
  //       ->with('products', $products);
  //       // return view('home');
  //   }

    public function logout()
    {
        \Auth::logout();
        return \Redirect::to('/');
    }

     public function recommend()
    {
    	// var_dump(\File::get(public_path().'/robots.txt'));
        $categories = Category::all();
        return view('recommend')
        ->with('categories', $categories);
    }

   

    public function info()   //用户个人信息
    {
      $user = \Auth::user();
      // dd($user);
      return view('users.index',compact('user'));
    }


    public function update_info(Request $request)
    {
      $user = \Auth::user();
      $user->update($request->all());
      flash()->overlay('信息已更新', '成功');
      // flash('信息已更新')->success();
      return redirect(route('info'));
    }

    public function changepwd()
    {
      $user = \Auth::user();
      return view('users.pwd',compact('user'));
    }

    public function update_pwd(PasswordRequest $request)
    {
      $user = \Auth::user();
      $email = \Auth::user()->email;
      $old_pwd = $request->get('password_old');
      // dd($old_pwd);
      if(\Auth::attempt(['email' => $email, 'password' => $old_pwd]))
        {
              $password = $request->get('password');
              $user->password = $password;
              $user->save();
              flash()->overlay('密码已更新', '成功');
               return redirect(route('info'));
        }
      flash('密码错误')->warning();
      return redirect(route('changepwd'));
    }

    public function manage()
    {
      if(\Auth::user()->id != 1)
        {
          return redirect(route('info'));
        }
      return view('manage.index');
    }

    public function getUser()
    {
      $users = User::all();
      return view('users.admin', compact('users'));
    }


    public function adminOrder()
    {
      $orders = Order::all();
      return view('order.admin', compact('orders'));
    }

    // public function addShopingcart($id, $num)
    // {

    //   // return 'shopping cart'.$id.$num;
    //   if(\Auth::check()){
    //     $uid = \Auth::user()->id;
    //     if($uid == 1)
    //     {
    //       return 'you are admin';
    //     }
    //     else
    //     {
    //       if(!Shoppingcart::where('user_id',$uid)->first())
    //       {
    //         $cart = new Shoppingcart;
    //         $cart->user_id = $uid;
    //         // $items = [$id=>(int)$num];
    //         // echo $items[$id];
    //         $items = new \StdClass;
    //         $items->$id = $num;
    //         $json_items = json_encode($items);
    //         // $re_items = json_decode($json_items);
    //         // var_dump($re_items);
    //         // echo $re_items->$id;
    //         // $cart->
    //         $cart->items = $json_items;
    //         $cart->save();
    //       }
    //       else
    //       {
    //         $cart = Shoppingcart::where('user_id',$uid)->first();
    //         $dejson_items = json_decode($cart->items);
    //         var_dump($dejson_items);
    //         // echo count(get_object_vars($dejson_items));  //显示多少个商品

    //         if(!isset($dejson_items->$id))
    //         {
    //           $dejson_items->$id = $num;
    //           echo 'unchanged';
    //         }
    //         else
    //         {
    //           $current = (int)($dejson_items->$id);
    //           $dejson_items->$id = $current + (int)$num;
    //         }
    //         $enjson_items = json_encode($dejson_items);
    //         $cart->items = $enjson_items;
    //         $cart->update();
    //       }
    //       echo "updated";
    //     }

    //   }
    //   else{
    //     return \Redirect::to('/login');
    //   }
    // }

    // public function getShoppingcart()
    // {

    //   $categories = Category::all();
    //   $uid = \Auth::user()->id;
    //   $cart = Shoppingcart::where('user_id',$uid)->first();
    //   $dejson_items = json_decode($cart->items);
    //   // var_dump($dejson_items);
    //   $list = [];
    //   foreach (get_object_vars($dejson_items) as $id => $amount) {
    //     $product = Product::find($id);
    //     $item = new \StdClass;
    //     $item->product = $product;
    //     $item->num = $amount;
    //     $list[] = $item;
    //   }
    //   return view('shoppingcart.index')
    //   ->with('categories', $categories)

    //   ->with('list', $list)
    //   ->with('cart', $cart);
    // }

    // public function delete_shoppingcart_item()
    // {
    //   $id = \Input::get('id');
    //   var_dump($id);
    //   $uid = \Auth::user()->id;
    //   $cart = Shoppingcart::where('user_id',$uid)->first();
    //   $dejson_items = json_decode($cart->items, true);
    //   var_dump($dejson_items);
    //   if($dejson_items[$id])
    //     unset($dejson_items[$id]);
    //   var_dump($dejson_items);
    //   $enjson_items = json_encode($dejson_items);
    //   $cart->items = $enjson_items;
    //   $cart->update();
    //   return \Redirect::to('viewcart');
    // }

    // public function minus_shoppingcart_item()
    // {
    //   $id = \Input::get('id');
    //   $uid = \Auth::user()->id;
    //   $cart = Shoppingcart::where('user_id',$uid)->first();
    //   $dejson_items = json_decode($cart->items, true);
    //   if($dejson_items[$id])
    //   {
    //     if($dejson_items[$id] > 1)
    //     {
    //       $dejson_items[$id] -=1;
    //     }
    //     else{
    //       unset($dejson_items[$id]);
    //     }
    //   }
        
    //   $enjson_items = json_encode($dejson_items);
    //   $cart->items = $enjson_items;
    //   $cart->update();
    //   return \Redirect::to('viewcart');
    // }

    //   public function add_shoppingcart_item()
    // {
    //   $id = \Input::get('id');
    //   $uid = \Auth::user()->id;
    //   $cart = Shoppingcart::where('user_id',$uid)->first();
    //   $dejson_items = json_decode($cart->items, true);
    //   if($dejson_items[$id])
    //     $dejson_items[$id] +=1;
    //   $enjson_items = json_encode($dejson_items);
    //   $cart->items = $enjson_items;
    //   $cart->update();
    //   return \Redirect::to('viewcart');
    // }


    public function getOrder(){

       $categories = Category::all();
      $uid = \Auth::user()->id;
      $cart = Shoppingcart::where('user_id',$uid)->first();
      $dejson_items = json_decode($cart->items);
      // var_dump($dejson_items);
      $list = [];
      foreach (get_object_vars($dejson_items) as $id => $amount) {
        $product = Product::find($id);
        $item = new \StdClass;
        $item->product = $product;
        $item->num = $amount;
        $list[] = $item;
      }
      return view('order.index')
      ->with('categories', $categories)
      ->with('list', $list)
      ->with('cart', $cart);
    }


    public function ajax_add($id)
    {
      return $id + 'return';
    }
}




 ?>
<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->count = 3;
    //     // $this->middleware('auth');
    //     if(\Auth::check())
    //     {
    //         $uid = \Auth::user()->id;
    //         echo $uid;
    //         if($uid != 1)
    //         {
    //             $cart = Shoppingcart::where('user_id',$uid)->first();
    //             if($cart)
    //             {
    //                 $dejson_items = json_decode($cart->items);
    //                 $this->count = count(get_object_vars($dejson_items));
    //             }
    //         }
    //     }

    //     // $this->count = 5;
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // return 'from cotroller index';
        return view('categories.index')
        ->with('categories', $categories);
        // ->with('count', $this->count);
    }


    public function mainPage(){
        $categories = Category::with(['products' =>function($query){
            $query->orderBy('id','desc');     //只取2个
        }])->get();
        $products = Product::take(2)->where('availability', '=', 1)->get();
        // var_dump($categories);
        // foreach ($categories as $category) {
        //     foreach ($category->products as $product) {
        //         echo $product->title;
        //     }
        // }
        // var_dump(\File::get(public_path().'/robots.txt'));
        // echo $this->count;
        return view('index')
        ->with('categories', $categories)
        // ->with('count', $this->count)
        ->with('products', $products);
    }

    public function getCategory($id)
    {
        $products = Product::where('category_id', '=', $id)->paginate(6);
        $categories = Category::all();
        $category = Category::find($id);
        // var_dump($category);
        return view('categories.single')
        ->with('categories', $categories)
        ->with('products', $products)
        // ->with('count', $this->count)
        ->with('category', $category);
    }

    public function searchProduct($keyword)
    {
        // $keyword = Input::get('keyword');
        $categories = Category::all();
        $products = Product::where('title', 'LIKE', '%'.$keyword.'%')->paginate(6);

        return view('products.search')
        ->with('categories', $categories)
        ->with('products', $products)
        // ->with('count', $this->count)
        ->with('keyword', $keyword);
    }


    public function postCreate(){
        $validator = \Validator::make(\Input::all(), Category::$rules);
        $name = \Input::get('name');
        if($validator->passes() )
        {
            if(Category::where('name',$name)->first())
                {
                    return Redirect::to('admin/categories/index')->with('message', '该类目已存在');
                }
            $category = new Category;
            $category->name = $name;
            $category->save();
            return Redirect::to('admin/categories/index')->with('message', '类目创建成功');
        }
        else{
            return  Redirect::to('admin/categories/index')
            ->with('message', '报错：')
            ->withErrors($validator)
            ->withInput();
        }
    }

    public function postDestroy(){
        $category = Category::find(\Input::get('id'));
        if($category)
        {
            $category->delete();
            return Redirect::to('admin/categories/index')
            ->with('message', '类目删除成功');
        }
        else{
            return Redirect::to('admin/categories/index')
            ->with('message', '没有此类目');
        }
    }
    public function about()
    {
        return 'from cotroller about';
        // return view('home.about');
    }
}

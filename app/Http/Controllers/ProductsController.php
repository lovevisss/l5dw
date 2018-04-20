<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $arr_categories = [];
        foreach (Category::all() as $category) {
            $arr_categories[$category->id] = $category->name;
        }
        $products = Product::paginate(8);
        // return 'from cotroller index';
        return view('products.index')
        ->with('products', $products)
        ->with('arr_categories', $arr_categories)
        ->with('categories', $categories);
    }

    public function postCreate(){
        $validator = \Validator::make(\Input::all(), Product::$rules);
        $title = \Input::get('title');
        if($validator->passes() )
        {
            if(Product::where('title',$title)->first())
                {
                    return Redirect::to('admin/products/index')->with('message', '该商品已存在');
                }
            $product = new Product;
            $product->category_id = \Input::get('category_id');
            $product->title = \Input::get('title');
            $product->description = \Input::get('description');
            $product->price = \Input::get('price');
            $image = \Input::file('image');
            $filename = date('Y-m-d-H-i-s')."-".$image->getClientOriginalName();
            $path = public_path('images/products/'.$filename);
            \Image::make($image->getRealPath())->resize(600,530)->save($path);
            $product->image = 'images/products/'.$filename;
            $product->save();
            return Redirect::to('admin/products/index')->with('message', '商品创建成功');
        }
        else{
            return  Redirect::to('admin/products/index')
            ->with('message', '报错：')
            ->withErrors($validator)
            ->withInput();
        }
    }

    public function postDestroy(){
        $product = Product::find(\Input::get('id'));
        if($product)
        {
            \File::delete(public_path($product->image));
            $product->delete();
            return Redirect::to('admin/products/index')
            ->with('message', '商品删除成功');
        }
        else{
            return Redirect::to('admin/products/index')
            ->with('message', '没有此商品');
        }
    }
    
    public function postToggleAvailability(){
        $product = Product::find(\Input::get('id'));
        if($product){
            $product->availability = \Input::get('availability');
            $product->save();
            return Redirect::to('admin/products/index')->with('message', '商品状态已更新！');

        }
        return Redirect::to('admin/products/index')->with('message', '没有此商品');
    }

    public function getProduct($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.single')
        ->with('categories', $categories)
        ->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $arr_categories = [];
        foreach (Category::all() as $category) {
            $arr_categories[$category->id] = $category->name;
        }
        return view('products.edit')
        ->with('categories', $categories)
        ->with('arr_categories', $arr_categories)
        ->with('product', $product);
    }

    public function updateProduct()
    {
        $id = \Input::get('id');
        $product = Product::find($id);
        $product->category_id = \Input::get('category_id');
        $product->title = \Input::get('title');
        $product->description = \Input::get('description');
        $product->price = \Input::get('price');
        $image = \Input::file('image');
        if($image)   //如果有图片上传则更新
        {
            $filename = date('Y-m-d-H-i-s')."-".$image->getClientOriginalName();
            $path = public_path('images/products/'.$filename);
            \Image::make($image->getRealPath())->resize(600,530)->save($path);
            $product->image = 'images/products/'.$filename;
        }
        
        $product->update();
        return Redirect::to('admin/products/index')->with('message', '商品已更新！');
    }
}

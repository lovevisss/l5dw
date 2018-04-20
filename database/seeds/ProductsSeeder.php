<?php

use Illuminate\Database\Seeder;
use App\Category;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories_num = Category::all()->count();
    	for($category_id=1; $category_id <= $categories_num; $category_id++)
    	{
    		for($i=1; $i<5; $i++)
    		{
				DB::table('products')->insert([
	        	'category_id' => $category_id,
	        	'title'       => 'Mate '.$i,
	        	'description' => 'this is the latest version for now',
	        	'price'		  => 4999,
	        	'availability'=> 0,
                'num'         =>200,
	        	'image'       => '/images/products/default.jpg',
	        	'created_at' => date('Y-m-d H:i:s'),
	        	'updated_at' => date('Y-m-d H:i:s'),
    			]);
    		}
    	}
     
    }
}

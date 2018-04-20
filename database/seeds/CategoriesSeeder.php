<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$table = ['笔记本', '台式机', '平板电脑', '手机'];
    	foreach ($table as $key) {
    		DB::table('categories')->insert([
        	'name' => $key,
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s'),
        ]);
    	}
        
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\SubCategory;
use Illuminate\Database\Seeder;


use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cats = ['Men','Women','Babies','Home Appliances'];
        $sub = [
            ['category_id'=>1,'name'=>'Shooe'],
            ['category_id'=>1,'name'=>'belt'],
            ['category_id'=>1,'name'=>'Money bag'],
            ['category_id'=>2,'name'=>'Bag'],
            ['category_id'=>2,'name'=>'Ladies parts bag'],
            ['category_id'=>2,'name'=>'Ladies Shooe'],
            ['category_id'=>2,'name'=>'Wallet'],
            ['category_id'=>2,'name'=>'Jacket'],
            ['category_id'=>3,'name'=>'Boots'],
            ['category_id'=>3,'name'=>'Globes'],
            ['category_id'=>4,'name'=>'Rack cover'],
            ['category_id'=>4,'name'=>'Mat']
        ];

        foreach($cats as $cat){
            Category::create([
                'name'=> $cat,
                'slug'=> Str::slug($cat, '-'),
                'author_id'=>1
            ]);
        }

        // foreach($sub as $key => $subcategory){
        //     SubCategory::create([
        //         'name'=> $subcategory['name'],
        //         'slug'=> Str::slug($subcategory['name']),
        //         'category_id'=> $subcategory['category_id'],
        //         'author_id'=>1
        //     ]);
        // }


    }
}

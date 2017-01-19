<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class DummySeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id'    =>  1,
            'name'  =>  'laptops'
        ]);
        Category::create([
            'id' => 2,
            'parent_id' => 1,
            'name'  =>  'lenovo'
        ]);

        \App\Models\CategoryField::create([
            'id' => 1,
            'category_id' => 1,
            'field'  =>  'ram',
            'type'  =>  'string',
            'required'  =>true
        ]);

        \App\Models\Product::create([
            'id' => 1,
            'category_id' => 1,
            'name'  =>  'g505',
            'image'  =>  'aaaa',
            'price'  =>500
        ]);

        \App\Models\ProductValue::create([
            'id' => 1,
            'product_id' => 1,
            'field_id'  =>  1,
            'value'  =>  'aaaa'
        ]);
    }
}

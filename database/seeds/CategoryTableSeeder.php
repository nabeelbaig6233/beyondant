<?php

use App\models\category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
            ['name' => 'Western Ware', 'image' => 'assets/uploads/category/08.png', 'slug' => 'western-ware', 'created_at' => $now, 'created_by' => '1', 'updated_at' => $now, 'updated_by' => '1'],
            ['name' => 'TV Appliances', 'image' => 'assets/uploads/category/09.png', 'slug' => 'tv-appliances', 'created_at' => $now, 'created_by' => '1', 'updated_at' => $now, 'updated_by' => '1'],
            ['name' => 'Pets Products', 'image' => 'assets/uploads/category/10.png', 'slug' => 'pets-products', 'created_at' => $now, 'created_by' => '1', 'updated_at' => $now, 'updated_by' => '1'],
            ['name' => 'Car Motorbike', 'image' => 'assets/uploads/category/11.png', 'slug' => 'car-motorbike', 'created_at' => $now, 'created_by' => '1', 'updated_at' => $now, 'updated_by' => '1'],
            ['name' => 'Industrial Products', 'image' => 'assets/uploads/category/12.png', 'slug' => 'industrial-products', 'created_at' => $now, 'created_by' => '1', 'updated_at' => $now, 'updated_by' => '1'],
            ['name' => 'Beauty Health Products', 'image' => 'assets/uploads/category/13.png', 'slug' => 'beauty-health-products', 'created_at' => $now, 'created_by' => '1', 'updated_at' => $now, 'updated_by' => '1'],
            ['name' => 'Grocery Products', 'image' => 'assets/uploads/category/14.png', 'slug' => 'grocery-products', 'created_at' => $now,'created_by' => '1',  'updated_at' => $now, 'updated_by' => '1'],
        ]);
    }
}

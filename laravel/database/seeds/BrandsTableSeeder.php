<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(['category_id'=>1,'name' => 'HIK Vision','created_at' => now(),'updated_at' => now()]);
        DB::table('brands')->insert(['category_id'=>3,'name' => 'TOA Electronics','created_at' => now(),'updated_at' => now()]);
        DB::table('brands')->insert(['category_id'=>3,'name' => 'CMX Audio','created_at' => now(),'updated_at' => now()]);
    }
}

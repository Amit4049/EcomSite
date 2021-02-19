<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use resources\images;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                [
                    'name'=>'Pikachu',
                    "price"=>"800",
                    "category"=>"Watch",
                    "details"=>"New Design Pikachu Plush Soft Toys",
                    "photo"=>"https://6b4a7f08f82ba7876008-57c1dad84f512a669a65443da3ec026c.ssl.cf3.rackcdn.com/pokemon-pikachu-8in-plush-soft-toy.jpg"
                
                ]

            


        ]);
    }
}


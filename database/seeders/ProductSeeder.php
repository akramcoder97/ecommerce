<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            [
                'name'        =>'Lg Mobile',
                "price"       =>'65000da',
                "description" =>'A smart phone with 8gb ram and much more features',
                "category"    =>'Mobile',
                "gallery"     =>'https://w7.pngwing.com/pngs/194/802/png-transparent-lg-v30-lg-g6-samsung-galaxy-smartphone-lte-lg-electronics-gadget-mobile-phone.png',
                //"gallery"     =>'https://www.lg.com/ca_fr/images/cafr-mobile-hero-1-m.jpg',
            ],
            [
                'name'        =>'Lg Tv',
                "price"       =>'85000da',
                "description" =>'A smart tv with 8gb ram and much more features',
                "category"    =>'Tv',
                "gallery"     =>'https://www.lg.com/dz/images/television/md06026136/gallery/medium01_V1.jpg',
            ],
            [
                'name'        =>'Sony Tv',
                "price"       =>'99000da',
                "description" =>'A smart tv with 8gb ram and much more features',
                "category"    =>'Tv',
                "gallery"     =>'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71+7bU+fkVL._SL1500_.jpg',
            ],
            [
                'name'        =>'Beko Fridge',
                "price"       =>'75000da',
                "description" =>'Fridge 60L ram and much more features',
                "category"    =>'Fridge',
                "gallery"     =>'https://ventes-pas-cher.com/images/stories/beko-refrigerateur-3-portes-cn151920dx-462-l-auchan.jpg',
            ],
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;      # For entry of fake data

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // entry of this data towards the database
        DB::table('products')->insert([
            [
                'name' => 'Long Garden Fork',
                'price' => '2000',
                'category' => 'fork',
                'gallery' => 'https://www.thegardenshop.ie/images/detailed/2/long-handled-garden-fork-a.jpg',
                'description' => 'Long Handled Garden fork',
            ],
            [
                'name' => 'Short Garden Fork',
                'price' => '700',
                'category' => 'fork',
                'gallery' => 'https://www.thegardenshop.ie/images/detailed/2/short-handled-garden-fork.jpg',
                'description' => 'Short Handled Garden fork',
            ],
            [
                'name' => 'Plant pot 60L',
                'price' => '1500',
                'category' => 'pot',
                'gallery' => 'https://www.thegardenshop.ie/images/detailed/4/60-litre-plant-pots.jpg',
                'description' => 'Plant pot having a capacity of 60 litres',
            ],
            [
                'name' => 'Tray Pots',
                'price' => '220',
                'category' => 'pot',
                'gallery' => 'https://www.thegardenshop.ie/images/detailed/2/potting-on-tray-1.jpg',
                'description' => 'Potting tray being of size 20 x 9 cm',
            ],
            [
                'name' => 'Tomato Seeds',
                'price' => '70',
                'category' => 'seed',
                'gallery' => 'https://www.makro.co.za/sys-master/images/hd4/he5/8924976611358/silo-MIN_321241_EAC_large',
                'description' => 'Starke Ayres Tomato seed',
            ],
            [
                'name' => 'Lettuce Seeds',
                'price' => '40',
                'category' => 'seed',
                'gallery' => 'https://www.makro.co.za/sys-master/images/h44/h34/8911459352606/silo-MIN_321237_EAA_large',
                'description' => 'Starke Ayres  Lettuce seed',
            ]
        ]);
    }
}

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
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/61o%2BtH45h0L._AC_SL1500_.jpg',
                'description' => 'Long Handled Garden fork',
            ],
            [
                'name' => 'Short Garden Fork',
                'price' => '700',
                'category' => 'fork',
                'gallery' => 'https://sc04.alicdn.com/kf/HTB1BCtzXZnrK1RjSspkq6yuvXXab.jpg',
                'description' => 'Short Handled Garden fork',
            ],
            [
                'name' => 'Plant pot 60L',
                'price' => '1500',
                'category' => 'pot',
                'gallery' => 'https://images-eu.ssl-images-amazon.com/images/I/41lEkh8Od7L._SR600%2C315_PIWhiteStrip%2CBottomLeft%2C0%2C35_SCLZZZZZZZ_.jpg',
                'description' => 'Plant pot having a capacity of 60 litres',
            ],
            [
                'name' => 'Tray Pots',
                'price' => '220',
                'category' => 'pot',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0248/9641/products/DSC02252_2048x.JPG?v=1553704436',
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
            ],
            [
                'name' => 'Landscape Lighting Package',
                'price' => '10000',
                'category' => 'Outdoor-Lighting-Service',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71jrO-WcyGL._AC_SL1500_.jpg',
                'description' => 'This package includes Installation of 10 outdoor Lights',
            ],
            [
                'name' => 'Gold Lawn Care Program',
                'price' => '12000',
                'category' => 'Lawn-care-Service',
                'gallery' => 'https://www.bglawnservice.com/wp-content/uploads/2018/01/Blue-Grass-Lawn-Service-Guarantee.jpg',
                'description' => 'This package includes 6 Lawn Care Visits, Specialized Soil Bionutrition, and Specialized Treatment against Insect.',
            ],
            [
                'name' => 'Lawn Mowing',
                'price' => '400',
                'category' => 'Lawn-mowing-Service',
                'gallery' => 'https://www.villageofmontebello.org/wp-content/uploads/grass-lawn-mower.jpg',
                'description' => 'Mowing service for a land of about 8 perch',
            ]
        ]);
    }
}

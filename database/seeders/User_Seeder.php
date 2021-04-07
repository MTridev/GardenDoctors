<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;      # For entry of fake data
use Illuminate\Support\Facades\Hash;    # This would decode and send the data

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // entry of this data towards the database
        DB::table('users')->insert([
            'name' => 'jane',
            'email' => 'jane@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}

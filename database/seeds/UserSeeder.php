<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privilages')->insert([
        	'id' => 1,
            'name' => 'Wildan',
            'email' => 'wildan.arrahman@gmail.com',
            'address' => 'Lumajang',
            'contact' => '081230622288',
            'password' => Hash::make('wildan'),
            'privilage_id' => 1,
            'poktan_id' => 1,
        ]);
    }
}

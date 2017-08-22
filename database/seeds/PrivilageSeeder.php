<?php

use Illuminate\Database\Seeder;

class PrivilageSeeder extends Seeder
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
            'name' => 'admin',
            'is_superadmin' => 1,
        ],[
        	'id' => 2,
            'name' => 'petani',
            'is_superadmin' => 0,
        ],[
    		'id' => 3,
    	    'name' => 'instansi',
    	    'is_superadmin' => 0,
        ],[
        	'id' => 4,
            'name' => 'industri',
            'is_superadmin' => 0,
        ]);
    }
}

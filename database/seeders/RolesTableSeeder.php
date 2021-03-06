<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'display_name' => 'Developer',
                'id' => 1,
                'name' => 'developer',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            1 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'display_name' => 'Administrator',
                'id' => 2,
                'name' => 'admin',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            2 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'display_name' => 'Normal User',
                'id' => 3,
                'name' => 'user',
                'updated_at' => '2021-08-04 00:08:41',
            ),
        ));
        
        
    }
}
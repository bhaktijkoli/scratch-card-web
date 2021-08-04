<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2021-08-04 00:08:41',
            ),
            1 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2021-08-04 00:08:41',
            ),
            2 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2021-08-04 00:08:41',
            ),
            3 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2021-08-04 00:08:41',
            ),
            4 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2021-08-04 00:08:41',
            ),
            5 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            6 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            7 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            8 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            9 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            10 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            11 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            12 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            13 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            14 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            15 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            16 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            17 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            18 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            19 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            20 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            21 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            22 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            23 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            24 => 
            array (
                'created_at' => '2021-08-04 00:08:41',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2021-08-04 00:08:41',
            ),
            25 => 
            array (
                'created_at' => '2021-08-04 07:53:33',
                'id' => 26,
                'key' => 'browse_cards',
                'table_name' => 'cards',
                'updated_at' => '2021-08-04 07:53:33',
            ),
            26 => 
            array (
                'created_at' => '2021-08-04 07:53:33',
                'id' => 27,
                'key' => 'read_cards',
                'table_name' => 'cards',
                'updated_at' => '2021-08-04 07:53:33',
            ),
            27 => 
            array (
                'created_at' => '2021-08-04 07:53:33',
                'id' => 28,
                'key' => 'edit_cards',
                'table_name' => 'cards',
                'updated_at' => '2021-08-04 07:53:33',
            ),
            28 => 
            array (
                'created_at' => '2021-08-04 07:53:33',
                'id' => 29,
                'key' => 'add_cards',
                'table_name' => 'cards',
                'updated_at' => '2021-08-04 07:53:33',
            ),
            29 => 
            array (
                'created_at' => '2021-08-04 07:53:33',
                'id' => 30,
                'key' => 'delete_cards',
                'table_name' => 'cards',
                'updated_at' => '2021-08-04 07:53:33',
            ),
        ));
        
        
    }
}
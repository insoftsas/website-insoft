<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        [
            'name' => 'root',
            'display_name' => 'Super Administrador',
        ],
        [
            'name' => 'admin',
            'display_name' => 'Administrador',
        ],
        [
            'name' => 'jury',
            'display_name' => 'Jurado',
        ],
        
        ]);
    }
}

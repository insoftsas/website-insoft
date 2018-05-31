<?php

use Illuminate\Database\Seeder;

class AssignedRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assigned_roles')->insert([

            ['user_id' => 1, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 2, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 3, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 4, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 5, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 6, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 7, 'role_id' => 1, 'who_user' => 1],
            ['user_id' => 8, 'role_id' => 1, 'who_user' => 1],

        ]);
    }
}

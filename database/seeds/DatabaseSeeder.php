<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AssignedRolesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        DB::table('oauth_clients')->insert([
            [
                'name' => 'Hackathon Montería Personal Access Client',
                'secret' => '95tHYT2V4YJdhfpznkb53rE9DQQSVOTqnTsjx3gD',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
            ],
            [
                'name' => 'Hackathon Montería Password Grant Client',
                'secret' => 'XSfChGYCNUFq0OuAeyIMroOOMLpqGDQvLK6vsMpi',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
            ]
        ]);
    }
}

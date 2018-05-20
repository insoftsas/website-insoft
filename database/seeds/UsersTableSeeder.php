<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

        [
          'name' => 'Eduard',
          'email' => 'xseduard@gmail.com',
          'password' => '$2y$10$dQkup6PF6OOJAcaYT2b08OUeDkKg2XKMMDiGAFVX7qZ67h2vVeJ.i',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
          'name' => 'Omar Flórez', 
          'email' => 'omarmfs98@protonmail.com',
          'password' => '$2y$10$VzynijW3c97.Me7NIOLXqOx.jdSDrCKVbevLSX8FWjDvGnAs4tDJ.',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
          'name' => 'Sergio Molina',
          'email' => 'smmm20140724@gmail.com',
          'password' => '$2y$10$3dAsjEctRf8CouOJMjjsn.lUZnor5k1v/v047pBa9o1EaY3lULaN6',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
          'name' => 'Sebastian Arteaga',
          'email' => 'sarteagadiaz@gmail.com',
          'password' => '$2y$10$JfmjOeK8NbJVdfKGysiyhOY.d6wC1q3gItCKTlVhhPw2oTfhP8NsG',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ]

      ]);

    }
}

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
        ],
        [
          'name' => 'Alvaro Sepulveda',
          'email' => 'salgadopalomo@yahoo.es',
          'password' => '$2y$10$2vLcHeWB4Y1BAX.Zn5DjgufMZT2no5Jd4KtwxAXajpnjvda8n0D12',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
          'name' => 'Ceidy Ortiz',
          'email' => 'ortizoquendo-1991@hotmail.com',
          'password' => '$2y$10$mRvq7E5H6zSa/slvaccozeXxf4n8E.XTj2hZlzxWrjZIivuYDq21a',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
          'name' => 'Yajaira Alvarez',
          'email' => 'yrap2009@hotmail.es',
          'password' => '$2y$10$KEWwvSAZ5uv44LBn2W7K1O12ptR5D0wms2bivJuu4YMnIvMJRqJSi',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ],
        [
          'name' => 'Paola Polo',
          'email' => 'paopolo105@gmail.com',
          'password' => '$2y$10$ae9vWrPrW4RsSTQi01MfB.ruBxcimGA1cWiZqlN3zkIU5D3YS8wvy',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
        ]

      ]);

    }
}

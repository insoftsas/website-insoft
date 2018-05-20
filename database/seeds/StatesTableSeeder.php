<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		DB::table('states')->insert([

		    ['id' => '1', 'name' => 'AMAZONAS'],
			['id' => '2', 'name' => 'ANTIOQUIA'],
			['id' => '3', 'name' => 'ARAUCA'],
			['id' => '4', 'name' => 'ATLÁNTICO'],
			['id' => '5', 'name' => 'BOLÍVAR'],
			['id' => '6', 'name' => 'BOYACÁ'],
			['id' => '7', 'name' => 'CALDAS'],
			['id' => '8', 'name' => 'CAQUETÁ'],
			['id' => '9', 'name' => 'CASANARE'],
			['id' => '10', 'name' => 'CAUCA'],
			['id' => '11', 'name' => 'CESAR'],
			['id' => '12', 'name' => 'CHOCÓ'],
			['id' => '13', 'name' => 'CÓRDOBA'],
			['id' => '14', 'name' => 'CUNDINAMARCA'],
			['id' => '15', 'name' => 'GUAINÍA'],
			['id' => '16', 'name' => 'GUAVIARE'],
			['id' => '17', 'name' => 'HUILA'],
			['id' => '18', 'name' => 'LA GUAJIRA'],
			['id' => '19', 'name' => 'MAGDALENA'],
			['id' => '20', 'name' => 'META'],
			['id' => '21', 'name' => 'NARIÑO'],
			['id' => '22', 'name' => 'NORTE DE SANTANDER'],
			['id' => '23', 'name' => 'PUTUMAYO'],
			['id' => '24', 'name' => 'QUINDÍO'],
			['id' => '25', 'name' => 'RISARALDA'],
			['id' => '26', 'name' => 'SAN ANDRÉS Y PROVIDENCIA'],
			['id' => '27', 'name' => 'SANTANDER'],
			['id' => '28', 'name' => 'SUCRE'],
			['id' => '29', 'name' => 'TOLIMA'],
			['id' => '30', 'name' => 'VALLE DEL CAUCA'],
			['id' => '31', 'name' => 'VAUPÉS'],
			['id' => '32', 'name' => 'VICHADA']
		    
		]);


    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnterprisesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social_propietario');
            $table->string('nit');
            $table->string('representante_legal');
            $table->string('actividad_comercial');
            $table->string('sector_productivo');
            $table->integer('city_id')->unsigned();
            $table->string('neigboard')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('file_rut')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enterprises');
    }
}

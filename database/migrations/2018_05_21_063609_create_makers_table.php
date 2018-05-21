<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMakersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('doc_type', ['CC', 'CE', 'TI', 'SSN', 'NIT', 'PPN']);
            $table->string('document');
            $table->string('genere', 10);
            $table->date('bird_date')->nullable();
            $table->integer('city_id')->unsigned();
            $table->string('email');
            $table->string('phone');
            $table->enum('level', ['Estudiante', 'Técnico', 'Tecnólogo', 'Profesional']);
            $table->string('semester',10)->nullable();
            $table->string('area')->nullable();
            $table->string('career')->nullable();
            $table->string('skills')->nullable();
            $table->text('bio')->nullable();
            $table->string('file_document')->nullable();
            $table->string('file_certificate')->nullable();
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
        Schema::drop('makers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQualifiesMakersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifies_makers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('assistant');
            $table->string('doc_type', 3)->default('CC');
            $table->string('document');
            $table->string('level');
            $table->string('semester')->nullable();
            $table->string('career');
            $table->string('address');
            $table->string('neighborhood');
            $table->integer('city_id')->unsigned();
            $table->string('cellphone');
            $table->string('email');
            $table->boolean('topic_1');
            $table->boolean('topic_2');
            $table->boolean('topic_3');
            $table->boolean('topic_4');
            $table->boolean('topic_5');
            $table->boolean('topic_6');
            $table->boolean('topic_7');
            $table->string('event_1', 1);
            $table->string('event_2', 1);
            $table->string('event_3', 1);
            $table->string('speaker_1', 1);
            $table->string('speaker_2', 1);
            $table->string('speaker_3', 1);
            $table->string('guides_1', 1);
            $table->string('guides_2', 1);
            $table->string('logistics_1', 1);
            $table->string('logistics_2', 1);
            $table->string('logistics_3', 1);
            $table->longtext('firm')->nullable();
            $table->string('photo_url')->nullable();
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
        Schema::drop('qualifies_makers');
    }
}

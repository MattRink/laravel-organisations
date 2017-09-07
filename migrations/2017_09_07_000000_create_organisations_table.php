<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    public function up()
    {
        Schema::create('organisations', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('organisations');
    }
}
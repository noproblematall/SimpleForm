<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location')->nullable();
            $table->string('who')->nullable();
            $table->string('surface_type')->nullable();
            $table->string('energy')->nullable();
            $table->string('area')->nullable();
            $table->string('number_people')->nullable();
            $table->string('tax')->nullable();
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('site_url')->nullable();
            $table->string('comment')->nullable();
            $table->boolean('sell')->default(0);
            $table->string('eligble');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}

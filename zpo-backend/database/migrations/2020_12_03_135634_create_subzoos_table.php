<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubzoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subzoos', function (Blueprint $table) {
            $table->id('subzoos_id');
            $table->string('subzoo_name');
            $table->string('subzoos_no', 10);
            $table->string('subzoos_year');
            $table->boolean('subzoos_status');
            $table->string('fk_zoos_id');
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
        Schema::dropIfExists('subzoos');
    }
}

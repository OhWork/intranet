<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoos', function (Blueprint $table) {
            $table->id('zoos_id');
            $table->string('zoos_name');
            $table->string('zoos_type');
            $table->string('zoos_no', 10);
            $table->string('zoos_pic');
            $table->boolean('zoos_status');
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
        Schema::dropIfExists('zoos');
    }
}

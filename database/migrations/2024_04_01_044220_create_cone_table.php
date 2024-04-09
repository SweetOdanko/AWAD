<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cone', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('type');
            $table->string('image_path');
            $table->string('name');
            $table->text('dscript');
            $table->integer('star');
            $table->string('price');
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
        Schema::dropIfExists('cone');
    }
}

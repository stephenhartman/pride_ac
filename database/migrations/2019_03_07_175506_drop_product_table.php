<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('products');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model')->nullable();
            $table->decimal('price');
            $table->text('description')->nullable();
            $table->integer('seer_rating_id')->unsigned();
            $table->foreign('seer_rating_id')->references('id')->on('seer_ratings')->onDelete('cascade');
            $table->integer('unit_size_id')->unsigned();
            $table->foreign('unit_size_id')->references('id')->on('unit_sizes')->onDelete('cascade');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->timestamps();
        });
    }
}

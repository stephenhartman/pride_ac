<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign(['brand_id']);
            $table->dropColumn(['brand_id']);
            $table->dropForeign(['unit_size_id']);
            $table->dropColumn(['unit_size_id']);
            $table->dropForeign(['seer_rating_id']);
            $table->dropColumn(['seer_rating_id']);
        });
        Schema::dropIfExists('products');
    }
}

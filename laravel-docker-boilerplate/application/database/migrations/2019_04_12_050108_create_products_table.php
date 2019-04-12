<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->string('hier_lvl_2', 255);
            $table->string('hier_lvl_3', 255);
            $table->string('hier_lvl_4', 255);
            $table->string('hier_lvl_5', 255);
            $table->string('article_model', 255);
            $table->string('designation', 255);
            $table->string('image_url', 255);
            $table->string('category', 255);
            $table->text('hash')->nullable();
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('products');
    }
}

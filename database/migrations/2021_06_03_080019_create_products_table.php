<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->integer('regular_price');
            $table->integer('sale_price')->nullable();
            $table->string('SKU');
            $table->enum('stock_status',['instock','outofstock']);
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('image');
            $table->text('images')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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

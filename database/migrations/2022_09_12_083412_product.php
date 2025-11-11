<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->integer('menu_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned()->default('1')->nullable();;
            $table->integer('brand_id')->unsigned()->nullable();
            $table->string('product_name');
            $table->string('product_image');
            $table->longtext('product_description');
            $table->longtext('product_specifiction');
            $table->string('product_price_include_gst')->nullable();
            $table->string('product_price_exclude_gst')->nullable();
            $table->string('product_sku')->nullable();
            $table->string('product_mpn')->nullable();
            $table->string('availability')->nullable();
            $table->string('product_unit')->nullable();
            $table->text('short_description');
            $table->string('product_item')->nullable();
            $table->string('product_shipping')->nullable();
            $table->string('product_deliver')->nullable();
            $table->string('product_returns')->nullable();
            $table->enum('status', ['0', '1'])->default('1');
            $table->enum('in_gst', ['0', '1'])->default('1');
            $table->enum('ex_gst', ['0', '1'])->default('1');
            $table->enum('s_sku', ['0', '1'])->default('1');
            $table->enum('s_mpn', ['0', '1'])->default('1');
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
};

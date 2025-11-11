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
        Schema::create('seocategory', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned();
            $table->longtext('meta_title');
            $table->longtext('keyword');
            $table->longtext('description');
            $table->longtext('canonical');
            $table->enum('product',['Product']);
            $table->enum('status',['0','1'])->default('1');
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
        Schema::dropIfExists('seocategory');
    }
};

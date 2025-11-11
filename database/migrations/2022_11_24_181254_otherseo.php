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
        Schema::create('otherseco', function (Blueprint $table) {
            $table->id();
            $table->enum('menu_home',['0','1','2','3','4','5','6','7']);
            $table->longtext('meta_title');
            $table->longtext('keyword');
            $table->longtext('description');
            $table->longtext('canonical');
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
        Schema::dropIfExists('otherseco');
    }
};

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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->longtext('designation')->nullable();
            $table->enum('des',['0','1'])->default('1');
            $table->string('email');
            $table->enum('ema',['0','1'])->default('1');
            $table->string('email2')->nullable();
            $table->string('contact_no1');
            $table->enum('con1',['0','1'])->default('1');
            $table->enum('con2',['0','1'])->default('1');
            $table->enum('con3',['0','1'])->default('1');
            $table->string('contact_no2')->nullable()->nullable();;
            $table->string('contact_no3')->nullable()->nullable();;
            $table->text('address1');
            $table->text('address2')->nullable();
            $table->enum('add1',['0','1'])->default('1');
            $table->enum('add2',['0','1'])->default('1');
            $table->string('profile');
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
        Schema::dropIfExists('profiles');
    }
};

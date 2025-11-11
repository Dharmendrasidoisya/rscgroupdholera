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
        Schema::create('masterusers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->enum('user_type',['Superadmin','Admin','User']);
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email');
            $table->string('password');
            $table->string('assign_user')->nullable();
            $table->enum('status',['1','0'])->default('0');
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
        Schema::dropIfExists('masterusers');
    }
};

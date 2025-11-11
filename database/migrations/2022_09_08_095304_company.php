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
        Schema::create('companys', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('gst_no')->nullable();
            $table->longtext('footer_description');
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('address1');
            $table->text('address2')->nullable();
            $table->string('contact_no1');
            $table->string('contact_no2')->nullable();
            $table->string('contact_no3')->nullable();
            $table->longtext('map')->nullable();
            $table->string('ctype')->nullable();
            $table->string('vind')->nullable();
            $table->string('company_logo');
            $table->string('footer_logo')->nullable();
            $table->enum('scales', ['1'])->nullable();
            $table->enum('status', ['0', '1'])->default('1');
        
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
        Schema::dropIfExists('companys');
    }
};

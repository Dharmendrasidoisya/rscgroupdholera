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
        Schema::create('sell_lands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->enum('budget',['100000','2500000','5000000','7500000','10000000','20000000','50000000']);
            $table->enum('zone',['agriculture','city-centre','green-belt','high-access-corridor','industrial','knowledge-i-t','logistic','public-facility-zone','residential','solar','sports-recreation','tourism-resort','village-buffer']);
            $table->enum('village',['ambali','bavaliyari','bhadiyad','bhangadh','bhimtalav','buranpura','cher','dholera','gogla','gorasu','hebatpur','kadipur','khun','mahadevpura','mingalpur','mundi','navagam','otaria','panchi','pipali','rahtalav','sandhida','sangasar','sodhi','zankhi']);
            $table->enum('listing_loc',['1-a-1','1-a-2','1-a-3','1-a-4','1-a-5','1-b','2-b-1','2-b-2','2-b-3','2-b-4','2-b-5','2-b-6','2-b-7','2a','3-a','3-b','3-c','3-d','4-a','4-b-1','4-b-2','5a','5b','5c','5d','6a','6b']);
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
        Schema::dropIfExists('sell_lands');
    }
};

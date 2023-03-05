<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('province', function (Blueprint $table) {
            $table->id();
            $table->string('code'); 
            $table->string('khmer'); 
            $table->string('english'); 
            $table->string('krong'); 
            $table->string('srok'); 
            $table->string('khan'); 
            $table->string('commune'); 
            $table->string('sangkat'); 
            $table->string('village'); 
            $table->string('reference'); 
            $table->string('longitudes'); 
            $table->string('latitudes'); 
            $table->string('east_en'); 
            $table->string('east_kh'); 
            $table->string('west_en'); 
            $table->string('west_kh'); 
            $table->string('south_en'); 
            $table->string('south_kh'); 
            $table->string('north_en'); 
            $table->string('north_kh'); 
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
        Schema::dropIfExists('district');
    }
}

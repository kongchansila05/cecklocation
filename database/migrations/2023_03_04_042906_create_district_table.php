<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function (Blueprint $table) {
            $table->id();
            $table->string('province_code')->nullable();
            $table->string('code')->nullable();
            $table->string('type')->nullable(); 
            $table->string('khmer'); 
            $table->string('english'); 
            $table->string('commune')->nullable();
            $table->string('sangkat')->nullable();
            $table->string('village')->nullable();
            $table->string('reference')->nullable();
            $table->string('official_note')->nullable();
            $table->string('note_by_checker')->nullable();
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

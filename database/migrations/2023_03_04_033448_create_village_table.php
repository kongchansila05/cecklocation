<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village', function (Blueprint $table) {
            $table->id();
            $table->string('commune_code')->nullable(); 
            $table->string('code')->nullable();
            $table->string('khmer'); 
            $table->string('english'); 
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
        Schema::dropIfExists('village');
    }
}

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
        Schema::create('vision', function (Blueprint $table) {
            $table->id();
            $table->string("vision");
            $table->string("mission");
            $table->string("sc1");
            $table->string("sc2");
            $table->string("sc3");
            $table->string("sc4");
           
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
        Schema::dropIfExists('vision');
    }
};

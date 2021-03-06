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
        Schema::create('stundes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('kosten');
            $table->date('datum');
            $table->time('von');
            $table->time('bis');
            $table->foreignId('fachId');
            $table->foreignId('userId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stundes');
    }
};

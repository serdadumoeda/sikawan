<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('responden_id');
            $table->unsignedBigInteger('jawab_id');
            $table->foreign('responden_id')->references('id')->on('respondens');
            $table->foreign('jawab_id')->references('id')->on('jawabans');
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
        Schema::dropIfExists('respons');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Currencynews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencynews', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->string('title');
            $table->string('author');
            $table->string('img0');
            $table->string('img1');
            $table->string('img3');
            $table->string('content0');
            $table->string('content1');
            $table->string('content2');
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
        Schema::dropIfExists('currencynews');
    }
}

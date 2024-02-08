<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            
            $table->id();
            $table->string("en");
            $table->string("de")->default("");
            $table->string("fr")->default("");
            $table->string("IT")->default("");
            $table->string("nl")->default("");
            $table->string("DK")->default("");
            $table->string("S")->default("");
            $table->string("PL")->default("");
            $table->string("LT")->default("");
            $table->string("N")->default("");
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
        Schema::dropIfExists('words');
    }
}

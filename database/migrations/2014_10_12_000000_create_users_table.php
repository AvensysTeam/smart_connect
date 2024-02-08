<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('company_name');
            $table->string('VAT')->nullable();
            $table->unsignedInteger('legal_form');
            $table->unsignedInteger('sector_activity');
            $table->unsignedInteger('company_size');
            $table->string('legal_address');
            $table->string('operational_address');
            $table->string('contact_person_name');
            $table->string('position');
            $table->string('email')->unique();
            $table->string('mobile_phone')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('accept_terms');  // 'on' : agreed, 'off': disagreed
            $table->string('accept_privacy');
            // 3: initial level , 2 : lowest level, 1: management level, 10: admin
            $table->unsignedInteger('role_id')->default(3); 
            $table->unsignedInteger('level_up')->default(0); // parent id
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
        Schema::dropIfExists('users');
    }
}

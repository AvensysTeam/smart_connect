<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string("unit");
            $table->string("location")->default("");
            $table->string('serial');
            $table->string('imgpath');
            $table->integer('family')->default(-1);
            $table->integer('Alarm00');
            $table->integer('Alarm01');
            $table->integer('Alarm02');
            $table->integer('Alarm03');
            $table->integer('Alarm04');
            $table->integer('Alarm05');
            $table->integer('Alarm06');
            $table->integer('Alarm07');
            $table->integer('Alarm08');
            $table->integer('Alarm09');
            $table->integer('Alarm10');
            $table->integer('Alarm11');
            $table->integer('Alarm12');
            $table->integer('CO2Level');
            $table->integer('IncreaseSpeedIAQ');
            $table->integer('InfoProbeIAQ');
            $table->integer('MeasAWP');
            $table->integer('MeasInput1');
            $table->integer('MeasInput2');
            $table->integer('MeasTemp1F');
            $table->integer('MeasTemp2R');
            $table->integer('MeasTemp3S');
            $table->integer('MeasTemp4E');
            $table->integer('RHLevel');
            $table->integer('StatusUnit');
            $table->integer('StatusWeekly');
            $table->integer('VOCLevel');
            $table->integer('cntUpdate_eeprom_info');
            $table->integer('cntUpdate_eeprom_settemp');
            $table->integer('cntUpdate_eeprom_settingpar');
            $table->integer('cntUpdate_eeprom_weekly');
            $table->integer('none');
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
        Schema::dropIfExists('devices');
    }
}

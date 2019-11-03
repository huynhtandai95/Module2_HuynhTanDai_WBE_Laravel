<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('users_id');
            $table->integer('Services_id');
            $table->integer('OtherService_id');
            $table->date('DateStart');
            $table->date('DateEnd');
            $table->integer('UnitRentService');
            $table->integer('TotalPrice');
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
        Schema::dropIfExists('contracts');
    }
}

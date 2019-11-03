<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('NameService');
            $table->string('Description');
            $table->integer('AreaUsed');
            $table->integer('MaxPeople');
            $table->string('Standard');
            $table->string('Convenient');
            $table->integer('NumberFloors');
            $table->integer('AreaPool');
            $table->integer('Price');
            $table->integer('TypeRent_id');
            $table->integer('TypeOfService_id');
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
        Schema::dropIfExists('services');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDeltaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('order_deltais', function (Blueprint $table) {
                $table->integer('id')->autoIncrement();
                $table->string('fullName');
                $table->string('email');
                $table->string('phone',15);
                $table->string('numberID',15)->unique();
                $table->string('TypeOfService_id');
                $table->string('TypeRent_id');
                $table->string('address');
                $table->date('dateStart');
                $table->date('dateEnd');
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
        Schema::dropIfExists('order_deltais');
    }
}

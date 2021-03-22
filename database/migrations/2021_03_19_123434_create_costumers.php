<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 191);
            $table->string('medical_record', 20);
            $table->string('phone', 20);
            $table->string('cel', 20);
            $table->string('zipcode', 191);
            $table->string('address', 191);
            $table->string('complement', 191);
            $table->string('address_number', 191);
            $table->string('district', 191);
            $table->string('state', 255);
            $table->string('city', 191);
            $table->string('birth', 191);
            $table->string('age', 191);
            $table->string('gender', 191);
            $table->string('rg', 191);
            $table->string('organ_rg', 191);
            $table->string('cpf', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costumers');
    }
}

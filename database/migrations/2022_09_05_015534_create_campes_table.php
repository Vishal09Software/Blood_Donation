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
        Schema::create('campes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organised_by');
            $table->string('date');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('person');
            $table->string('number');
            $table->string('status');
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
        Schema::dropIfExists('campes');

    }
};

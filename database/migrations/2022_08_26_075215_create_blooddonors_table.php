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
        Schema::create('blooddonors', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('number');
            $table->string('city',255);
            $table->string('state',255);
            $table->string('blood_group',255);
            $table->string('gender',10);
            $table->string('ldb',255)->nullable();
            $table->string('unit',255);
            $table->string('status',10);
            $table->string('image',255);

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
        Schema::dropIfExists('blooddonors');
    }
};

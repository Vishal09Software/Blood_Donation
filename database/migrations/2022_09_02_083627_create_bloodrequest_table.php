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
        Schema::create('bloodrequest', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('cname',255);
            $table->string('number');
            $table->string('state');
            $table->string('city');
            $table->string('need_date',20);
            $table->string('blood_group',255);
            $table->string('gender',10);
            $table->string('unit',255);
            $table->string('status',10);
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
        Schema::dropIfExists('bloodrequest');
    }
};

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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date');
            $table->string('start');
            $table->string('end');
            $table->string('duration');
            $table->string('client')->nullable()->default(NULL);
            $table->string('course')->nullable()->default(NULL);
            $table->string('serviceType');
            $table->string('class');
            $table->longText('obs')->nullable()->default(NULL);
            $table->string('status');
            $table->string('color');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
};

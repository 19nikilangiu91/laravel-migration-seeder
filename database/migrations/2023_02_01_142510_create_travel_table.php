<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 32);
            $table->string('destination', 64);
            $table->integer('price')->unsigned();
            $table->string('package_code', 10)->unique();
            $table->date('departure_day');
            $table->time('departure_day_time');
            $table->date('return_day');
            $table->time('return_day_time');
            $table->boolean('refundable')->default(false);
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
        Schema::dropIfExists('travel');
    }
};
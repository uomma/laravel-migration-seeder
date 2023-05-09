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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table-> string('Brand', 50);
            $table->string('from', 50);
            $table->string('to', 50);
            $table->dateTime('from_time', 6);
            $table->dateTime('to_time', 6);
            $table->string('code_train', 50);
            $table->tinyInteger('carriage_number');
            $table->boolean('on_time')->default(true);            
            $table->boolean('offset')->default(false);
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
        Schema::dropIfExists('trains');
    }
};

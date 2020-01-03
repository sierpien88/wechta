<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('date_blocked')->nullable();
            $table->text('dimension')->nullable();
            $table->integer('rooms')->nullable();
            $table->text('description')->nullable();
            $table->text('price')->nullable();
            $table->text('price_per_meter')->nullable();
            $table->text('level')->nullable();
            $table->text('pdf')->nullable();
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
        Schema::dropIfExists('apartments');
    }
}

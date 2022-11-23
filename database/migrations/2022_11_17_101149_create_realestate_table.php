<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealestateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realstates', function (Blueprint $table) {
            $table->id();
            $table->string('uri')->nullable();
            $table->json('imgs')->nullable();
               $table->string('adress');
               $table->string('wood');
               $table->string('city');
               $table->string('type');
                $table->string('condition')->nullable();
                $table->integer('rooms');
                $table->integer('badrooms')->default(1)->nullable();
                $table->string('utility');
                $table->decimal('price', 8,2);
                $table->string('currence')->default('Mzn');
                $table->integer('rate')->nullable();
                $table->string('province');
                $table->string('description')->nullable();
            $table->unsignedBigInteger('realtor_id');
            $table->foreign('realtor_id')->references('id')->on('realtors');
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
        Schema::dropIfExists('realestate');

    }
}

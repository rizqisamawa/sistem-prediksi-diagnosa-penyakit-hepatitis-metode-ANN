<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit', function (Blueprint $table) {
            $table->increment('id');
            $table->string('kategory');
            $table->int('umur');
            $table->string('jenis_kelamin');
            $table->float('alb');
            $table->float('alp');
            $table->float('alt');
            $table->float('ast');
            $table->float('bil');
            $table->float('ggt');
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
        Schema::dropIfExists('penyakit');
    }
}

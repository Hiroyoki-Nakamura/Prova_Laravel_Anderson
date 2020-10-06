<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCertidoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidoes', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo');
            $table->string('Envolvido 1');
            $table->string('Envolvido 2');
            $table->string('Data da Certidão');
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
        Schema::dropIfExists('certidoes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            

            $table->string('foto')->nullable();
            $table->string('numero');
            $table->date('data_vencimento');
            $table->float('valor');
            $table->string('nome_pessoa');
            $table->string('banco');
            $table->string('recebido_de');
            $table->string('passei_para');
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
        Schema::dropIfExists('cheques');
    }
}

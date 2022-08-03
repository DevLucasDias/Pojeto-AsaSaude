<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::enableForeignKeyConstraints();
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fornecedor_id')->unsigned();
            $table->string('nome_produto');
            $table->timestamps();
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}

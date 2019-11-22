<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->bigIncrements('id_panier');
            $table->bigInteger('produit_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('panier', function (Blueprint $table) {
            $table->foreign('produit_id')->references('id_produit')->on('produit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier');
    }
}

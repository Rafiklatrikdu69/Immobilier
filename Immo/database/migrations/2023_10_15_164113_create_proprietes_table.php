<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('description');
            $table->integer('surface');
            $table->integer('nb_pieces');
            $table->integer('nb_chambres');
            $table->integer('nb_etages');
            $table->integer('prix');
            $table->string('ville');
            $table->string('adresse');
            $table->string('code_postal');
            $table->boolean('vendu');
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
        Schema::dropIfExists('proprietes');
    }
}

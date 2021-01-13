<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->bigInteger('price');
            $table->integer('surface');
            $table->integer('rooms')->nullable();
            $table->enum('state', ['Neuf', 'Rénovation', 'Abandonner', 'Ancien']);
            $table->integer('constructionYear')->nullable();
            $table->string('postcode');
            $table->string('town');
            $table->foreignId('type_id')->constrained();
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
        Schema::dropIfExists('properties');
    }
}

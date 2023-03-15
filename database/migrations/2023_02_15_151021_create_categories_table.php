<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('categorie');
            $table->timestamps();
        });
        DB::table('categories')->insert([
            ['categorie' => 'Carte mère'],
            ['categorie' => 'Imprimante'],
            ['categorie' => 'Disque dur'],
            ['categorie' => 'Unité centrale'],
            ['categorie' => 'Écran dordinateur'],
            ['categorie' => 'Souris (informatique)'],
            ['categorie' => 'Ordinateurs portables'],
            ['categorie' => 'Vidéoprojecteur'], 
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

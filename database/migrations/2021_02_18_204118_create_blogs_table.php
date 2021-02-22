<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //con il comando migrate fara' un update di tutte le operazioni non caricate
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            //dopo l'id creo le mie colonne del DB
            $table->string('name', 50);
            $table->text('comment');
            $table->longText('text');
            $table->string('img_path ');
            //fine delle mie colonne db
    
            $table->timestamps(); // con questa riga mi ridara' i dati di created_at e update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // con il rollback annulliamo la migration tramite la colonna batch (torna indietro di 1)
    {
        Schema::dropIfExists('blogs');
    }
}

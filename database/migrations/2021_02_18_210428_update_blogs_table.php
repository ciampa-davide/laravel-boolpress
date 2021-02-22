<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



// qui posso eseguire le modifiche sulla mia tabella modificando i vari campi inseriti
//per effettuare l'update bisogna integrare il pacchetto dball altrimenti dara' sempre errore
class UpdateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //qui modifica i parametri (con i parametri modificati ad esempio $table->string('name', 60)->change();)
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('name', 60)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // qui torno sostanzialmente indietro (ovviamente bisogna riscrivere il codice con il parametro iniziale ad esempio $table->string('name', 50)->change();)
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('name', 50)->change();
        });
    }
}

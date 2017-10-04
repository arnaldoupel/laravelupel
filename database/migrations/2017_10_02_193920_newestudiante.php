<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Newestudiante extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->string('cedula', 8)->unique('UNIQ_3B3F3FAD7BF39BE0');
            $table->string('primer_nombre', 50);
            $table->string('email');
            
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudiante');

    }

}

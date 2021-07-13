<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeopleGest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function(Blueprint $table){ 
            $table -> id();
            $table -> string ('name', 50);
            $table -> string ('surname', 50);
            $table -> date ('date_of_bird');
            $table -> string ('phone_number', 9);
            $table -> string ('task',50);
            $table -> string ('department', 50);
            $table -> text ('aditional_info')->nullable();
            $table -> timestamps(); //hora y fecha de la última actualización en 2 cmps: created_at, updated_at
          });
          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifexists('people'); 
    }
}

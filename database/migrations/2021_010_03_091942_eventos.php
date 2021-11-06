<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration{
    
    public function up(){
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('eventos');
    }
}
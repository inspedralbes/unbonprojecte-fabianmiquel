<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Animal extends Model
{
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('caracteristica');
            $table->text('descripcion'); // Cambiado a text para permitir descripciones más largas
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animales');
    }
}
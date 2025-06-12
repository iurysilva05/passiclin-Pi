<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{



    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->string('telefone', 15);
            $table->string('email', 100);
            $table->string('cep', 15);
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        dd('$name');
    }




    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};

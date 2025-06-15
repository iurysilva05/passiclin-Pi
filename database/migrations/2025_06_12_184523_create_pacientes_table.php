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
            $table->string('telefone')->nullable();
           $table->string('email')->nullable();
           $table->string('cep')->nullable();
            $table->unsignedBigInteger('id_user')->nullable(); 
            $table->string('cpf')->unique();



            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });

    }




    public function down(): void
    {
         Schema::table('pacientes', function (Blueprint $table) {
            $table->dropColumn('cpf'); // Remove a coluna se precisar reverter
        });
        Schema::dropIfExists('pacientes');
         Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

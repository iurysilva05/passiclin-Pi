<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            // Identificação
            $table->id();
            $table->string('name');
            $table->string('cpf', 14)->unique()->comment('Formatado: 000.000.000-00');

            // Dados pessoais
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo', ['M', 'F', 'O'])->nullable()->comment('M - Masculino, F - Feminino, O - Outro');
            $table->string('telefone', 20)->nullable()->comment('Formatado: (00) 00000-0000');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // Endereço completo
            $table->string('cep', 9)->nullable()->comment('Formatado: 00000-000');
            $table->string('endereco', 200)->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 2)->nullable()->comment('Sigla do estado: SP, RJ, etc.');

            // Informações de saúde
            $table->enum('tipo_sanguineo', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])->nullable();
            $table->text('alergias')->nullable()->comment('Lista de alergias separadas por vírgula');
            $table->text('medicacoes')->nullable()->comment('Medicações em uso regular');
            $table->text('condicoes_medicas')->nullable()->comment('Condições médicas conhecidas');

            // Controle de acesso
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes()->comment('Registro de quando o usuário foi deletado');

            // Índices
            $table->index('cpf');
            $table->index('email');
            $table->index('telefone');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index()->constrained()->onDelete('cascade');
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};

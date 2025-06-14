<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Paciente extends Authenticatable
{
    protected $table = 'pacientes';

    protected $fillable = [
        'name',
        'email',
        'cep',
        'telefone',
        'cpf',
        'id_user',
        'password'

    ];

     protected $hidden = [
        'password',
        'remember_token',
    ];

    public static $rules = [
    'cpf' => 'required|string|size:11|unique:pacientes',
    ];

}

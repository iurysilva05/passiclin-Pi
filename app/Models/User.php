<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'data_nascimento',
        'sexo',
        'telefone',
        'email',
        'password',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'tipo_sanguineo',
        'alergias',
        'medicacoes',
        'condicoes_medicas'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'data_nascimento' => 'date',
    ];

    /**
     * Mutators para formatar automaticamente os campos
     */
    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getCpfAttribute($value)
    {
        return substr($value, 0, 3) . '.' . substr($value, 3, 3) . '.' . substr($value, 6, 3) . '-' . substr($value, 9, 2);
    }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getTelefoneAttribute($value)
    {
        if (strlen($value) === 11) {
            return '(' . substr($value, 0, 2) . ') ' . substr($value, 2, 5) . '-' . substr($value, 7, 4);
        }
        return $value;
    }

    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = preg_replace('/[^0-9]/', '', $value);
    }

    public function getCepAttribute($value)
    {
        return substr($value, 0, 5) . '-' . substr($value, 5, 3);
    }

    /**
     * Escopos locais para consultas comuns
     */
    public function scopePorTipoSanguineo($query, $tipo)
    {
        return $query->where('tipo_sanguineo', $tipo);
    }

    public function scopeComAlergias($query)
    {
        return $query->whereNotNull('alergias');
    }

    /**
     * Relacionamentos
     */


    /**
     * Métodos auxiliares
     */
    public function idade()
    {
        return $this->data_nascimento?->age;
    }

    public function enderecoCompleto()
    {
        return implode(', ', array_filter([
            $this->endereco,
            $this->numero,
            $this->complemento,
            $this->bairro,
            $this->cidade,
            $this->estado,
            $this->cep
        ]));
    }
}

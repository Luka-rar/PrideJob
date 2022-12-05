<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $primaryKey = "id";
    protected $table = "candidatos";
    public $incrementing = false;
    
    protected $fillable = [
        'user',
        'nome_completo',
        'cpf',
        'rg',
        'uf_rg',
        'orgao_emissor',
        'data_emissao',
        'genero',
        'etnia',
        'data_nascimento',
        'uf_nascimento',
        'estado_civil',
        'nome_mae',
        'nome_pai',
        'celular',
        'telefone',
        'email',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'estado'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}

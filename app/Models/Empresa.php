<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = "id";
    protected $table = "empresas";
    public $incrementing = false;
    
    protected $fillable = [
        'user',
        'nome_empresa',
        'cep',
        'cidade',
        'endereco',
        'numero',
        'representante',
        'cargo',
        'email',
        'telefone',
        'celular'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}

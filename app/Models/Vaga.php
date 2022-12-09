<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    

    protected $cast = [
        'items' => 'array'
    ];
    
    protected $fillable = [
        'user_id',
        'nome_empresa',
        'quantidade',
        'categoria',
        'tipo_vaga',
        'salario',
        'beneficio',
        'requisitos',
        'local',
        'horario',
        'cidade',
        'estado'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'id', 'user_id');
    }

    public function candidatos(){
        return $this->belongsToMany(Candidato::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

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

    protected $dates = ['date'];

    public function user(){
        return $this->belongsTo('App\Models\Empresa');
    }
   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatoVaga extends Model
{
    protected $table = "empresas";

    protected $fillable = [
        'status'
    ];
}

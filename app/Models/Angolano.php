<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Angolano extends Model
{
    protected $table = 'angolanos';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nome',
        'numero_bilhete',
        'data_nascimento',
        'naturalidade',
        'nome_pai',
        'nome_mae',
        'data_emissao',
        'sexo',
        'estado_civil',
        'altura',
        'residencia',
        'provincia',
        'data_validade',
    ];

    protected $dates = ['data_nascimento', 'data_emissao', 'data_validade'];   
}

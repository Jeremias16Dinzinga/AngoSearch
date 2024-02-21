<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Angolano extends Model
{
    protected $table = 'angolanos'; // Especifica o nome da tabela no banco de dados
    protected $primaryKey = 'id'; // Especifica a chave primária da tabela

    // Especifica quais campos podem ser preenchidos em massa
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

    // Especifica os campos que devem ser tratados como datas pelo Eloquent
    protected $dates = ['data_nascimento', 'data_emissao', 'data_validade'];

    // Opcional: definir relacionamentos, mutadores, acessores, etc.
}

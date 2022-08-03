<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    protected $fillable = [
        'nome', 'CNPJ', 'telefone', 'endereco', 'cidade', 'estado'
    ];
}

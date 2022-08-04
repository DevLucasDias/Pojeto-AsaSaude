<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    protected $fillable = [
        'id', 'nome', 'CNPJ', 'telefone', 'celular', 'endereco', 'numero', 'cidade', 'estado'
    ];

    public function produtos()
    {
        $this->hasMany(Produtos::class);
    }
}

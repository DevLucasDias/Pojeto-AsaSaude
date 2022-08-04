<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'nome_produto', 'fornecedor_id'
    ];

    public function fornecedor(){
        return $this->belongsTo(Fornecedores::class, 'fornecedor_id');
    }
}
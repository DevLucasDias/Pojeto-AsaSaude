<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'nome_produto', 'fornecedor_id'
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedores::class, 'fornecedor_id',);
    }

    public function scopeProdutosDeFornecedor($query, $idFornecedor)
    {
        $idFornecedor =  $idFornecedor;
        $query->where(function ($query) use ($idFornecedor) {
            $query->where('fornecedor_id', '=', $idFornecedor);
        });
    }
}

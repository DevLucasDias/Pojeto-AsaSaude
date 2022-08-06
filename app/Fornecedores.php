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
        return  $this->hasMany(Produtos::class, 'fornecedor_id', 'id');
    }
    

    public function scopeProcurar($query, $termo)
    {
       $termo =  "%$termo%";
       $query->where(function($query) use ($termo){
        $query->where('nome', 'like', $termo)
        ->orWhere('CNPJ','like', $termo);
       });
        
    }
}

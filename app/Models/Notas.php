<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'ndade', 'data_da_compra', 'nome_produto', 'endereco', 'cep','bairro', 'cidade','estado', 'pais','nota', 'idade','observacao', 'situacao', 'email'];
}

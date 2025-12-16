<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProdutoVidro;

class ProdutoVidro extends Model
{
   protected $fillable = [
    'nome',
    'tipo',
    'espessura',
    'preco',
   ];
   
}

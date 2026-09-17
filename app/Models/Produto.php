<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
      'nome',
      'descricao',
      'prazo_validade',
      'cor',
      'textura',
      'peso',
      'unidade_medida',
      'quantidade_minima'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'tbProduto';

    public $fillable = ['idProduto','nomeProduto','quantProduto','valorProduto','dataCadastro'];

    public $timestamps = false;
}

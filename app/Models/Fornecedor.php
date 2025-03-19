<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'tbFornecedor';

    public $fillable = ['idFornecedor','nomeFornecedor','cnpjFornecedor'];

    public $timestamps = false;
}

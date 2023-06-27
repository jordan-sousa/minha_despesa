<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{
    use HasFactory;
    protected $table = 'despesas';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        "nome",
        "descricao",
        "valor",
        "data_pagamento",
        "categoria_id",
        "usuario_id"
    ];
}

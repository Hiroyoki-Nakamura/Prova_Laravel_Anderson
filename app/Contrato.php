<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Contrato extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Tipo', 'Envolvido 1', 'Envolvido 2', 'Data do Contrato', 'Valor'
        ];    
}

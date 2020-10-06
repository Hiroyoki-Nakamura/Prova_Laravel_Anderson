<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Certidao extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'Tipo', 'Envolvido 1', 'Envolvido 2', 'Data da certidão'
        ];    
}

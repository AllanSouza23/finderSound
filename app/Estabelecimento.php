<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = ['proprietario', 'tipo', 'nomeLocal', 'emailProprietario', 'cidadeLocal', 'telefoneLocal'];
}

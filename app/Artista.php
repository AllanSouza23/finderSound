<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable = ['artista', 'genero', 'emailArtista', 'cidadeArtista', 'telefoneArtista'];
}

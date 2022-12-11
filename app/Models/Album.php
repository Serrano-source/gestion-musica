<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['Titulo','Artista','Añodesalida','artista_id'];

    public function artista() {

    	return $this->belongsTo(Artista::class);

     
    }
}

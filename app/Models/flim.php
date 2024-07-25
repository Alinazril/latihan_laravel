<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flim extends Model
{
    use HasFactory;
    public function kategori()
    {
        return $this->belongTo(Kategori::class, 'id_kategori');
    }

    public function genre()
    {
        return $this->belongToMany(Genre::class, 'genre_film', 'id_film', 'id_genre');
    }

    public function aktor()
    {
        return $this->belongToMany(Aktor::class, 'genre_film', 'id_film', 'id_aktor');
    }
}

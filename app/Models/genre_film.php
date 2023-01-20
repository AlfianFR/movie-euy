<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alert;

class genre_Film extends Model
{
    use HasFactory;
    public $fillable = ['kategori'];
    public $timestamps = true;
    public $table = 'genre_films';

    public static function boot()
    {
        parent::boot();

        self::deleting(function($genre){
            if($genre->movie->count() > 0){
                Alert::error('Gagal Menghapus',' '.$genre->kategori);
                return false;
            }
            Alert::success('Done', 'Data berhasil dihapus');
        });


    }

    public function movie()
    {
        // model GenreFilm memiliki banyak data
        // dari model Movie melalui fk id_genre
        return $this->hasMany(Movie::class, 'id_genre');
    }
}

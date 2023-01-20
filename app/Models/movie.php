<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $fillable = ['judul_film', 'background', 'cover',
        'sinopsis', 'id_tahun_rilis', 'id_durasi_film'];
    public $timestamps = true;

    public function tahunRilis()
    {
        // data model Movie dimiliki oleh Model TahunRilis
        // melalui fk id_tahun_rilis
        return $this->belongsTo(tahun_rilis::class, 'id_tahun_rilis');
    }

    public function casting()
    {
        // model Movie bisa memiliki banyak data (n to n)
        // dari model Casting melalui table pivot(bantuan)
        // yang bernama 'movie_casting' dengan masing-masing
        // fk id movie dan id_casting
        return $this->belongsToMany(Casting::class,
            'casting_movie', 'id_movie', 'id_casting');
    }

    public function genreFilm()
    {
        // data model Movie dimiliki oleh Model GenreFilm
        // melalui fk id_genre
        return $this->belongsTo(genre_film::class, 'id_genre');
    }

    public function reviewer()
    {
        // data model Movie dimiliki oleh Model Reviwer
        // melalui fk id_reviewer
        return $this->hasMany(Reviwer::class, 'id_movie');
    }

    public function image()
    {
        if ($this->cover && file_exists(public_path('images/movies/'
            . $this->cover))) {
            return asset('images/movies/' . $this->cover);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(cover) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/movies/'
            . $this->cover))) {
            return unlink(public_path('images/movies/' . $this->cover));
        }
    }

    public function background()
    {
        if ($this->background && file_exists(public_path('images/movies/'
            . $this->background))) {
            return asset('images/movies/' . $this->background);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    // mengahupus image(background) di storage(penyimpanan) public
    public function deleteBackground()
    {
        if ($this->background && file_exists(public_path('images/movies/'
            . $this->background))) {
            return unlink(public_path('images/movies/' . $this->background));
        }
    }
}
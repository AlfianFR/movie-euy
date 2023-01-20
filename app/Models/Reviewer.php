<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'foto', 'komentar'];
    public $timestamps = true;

    public function movie()
    {
        // model Reviewer memiliki banyak data
        // dari model Movie melalui fk id_genre
        return $this->hasMany(Movie::class, 'id_reviewer');
    }
}
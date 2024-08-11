<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'poster',
        'publication'
    ];
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_film');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'title', 'singer',
    ];
    public function AlbumRel()
    {
        return $this->belongsToMany('App\Album');
    }
}

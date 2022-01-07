<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'Name', 'year','times_sold','band_id',
    ];
    public function Bandsrel(){
        return $this->belongsTo('App\Band');
    }

    public function songsrel()
    {
        return $this->belongsToMany('App\Song');
    }

    
}
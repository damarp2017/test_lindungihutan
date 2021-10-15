<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artis extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'artis';
    protected $primaryKey = 'kd_artis';

    protected $guarded = [];

    public function _negara()
    {
        return $this->belongsTo(Negara::class, 'negara', 'kd_negara');
    }

    public function _film()
    {
        return $this->hasMany(Film::class, 'artis', 'kd_artis');
    }

    public function getCountFilmAttribute()
    {
        return $this->_film->count();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'film';
    protected $primaryKey = 'kd_film';

    protected $guarded = [];

    public function art()
    {
        return $this->belongsTo(Artis::class, 'artis', 'kd_artis');
    }

    public function _genre()
    {
        return $this->belongsTo(Genre::class, 'genre', 'kd_genre');
    }

    public function _produser()
    {
        return $this->belongsTo(Produser::class, 'produser', 'kd_produser');
    }
}

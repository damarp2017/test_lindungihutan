<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produser extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'produser';
    protected $primaryKey = 'kd_produser';

    protected $guarded = [];

    public function _film()
    {
        return $this->hasMany(Film::class, 'produser', 'kd_produser');
    }
}

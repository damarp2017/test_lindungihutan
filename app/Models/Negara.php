<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'negara';
    protected $primaryKey = 'kd_negara';

    protected $guarded = [];

    public function _artis()
    {
        return $this->hasMany(Artis::class, 'negara', 'kd_negara');
    }
}

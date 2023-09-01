<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialidade extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nome'
    ];

    public function dentista()
    {
        return $this->belongsToMany(Dentista::class, 'dentistas_especialidades');
    }
}

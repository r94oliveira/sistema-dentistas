<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dentista extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'cro',
        'cro_uf'
    ];

    public function especialidade()
    {
        return $this->belongsToMany(Especialidade::class, 'dentistas_especialidades');
    }
}

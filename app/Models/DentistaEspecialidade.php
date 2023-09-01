<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dentistaEspecialidade extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = "dentistas_especialidades";

    protected $fillable = [
       'especilidade_id',
       'dentista_id'
     ];

}

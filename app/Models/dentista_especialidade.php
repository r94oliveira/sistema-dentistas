<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dentista_especialidade extends Model
{
    use HasFactory;

    protected $fillable = [
       'especilidade_id',
       'dentista_id'
     ];

}

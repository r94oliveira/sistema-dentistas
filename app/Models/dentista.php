<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dentista extends Model
{
    use HasFactory;

    protected $fillable = [
       'id',
       'name',
       'email',
       'cro',
       'cro_uf',
    ];
}

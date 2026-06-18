<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    use HasFactory;

    protected $table = 'operaciones';

    public $timestamps = false;

    protected $fillable = [
        'tipo',
        'parametros',
        'resultado',
    ];
}

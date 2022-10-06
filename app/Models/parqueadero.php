<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parqueadero extends Model
{
    public $keyType = 'string';
    public $primarykey = 'lote';
    public $incrementing = false;
    protected $fillable = ['hora_ingreso', 'hora_egreso', 'dia', 'user_id'];
}

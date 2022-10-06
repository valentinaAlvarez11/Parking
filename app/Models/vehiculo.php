<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    public $timestamp = false;
    protected $fillable = ['placa', 'color', 'user_id'];

    public function vehiculo ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

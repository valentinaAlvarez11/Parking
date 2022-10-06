<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
trait TraitName
{

}


class servicio extends Model
{

    public $timestamp = true;
    protected $fillable = ['id', 'nombre', 'telefono'];
    use HasFactory;


}

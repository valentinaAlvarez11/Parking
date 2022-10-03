<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'parking_lot', 'availability', 'time_admission', 'time_departure',
        ];

    public function parkings()
     {
    return $this->hasMany(User::class, 'user_id');
    }
}

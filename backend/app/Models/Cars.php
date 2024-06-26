<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{


    use HasFactory;

    protected $fillable = [
        'driver_id',
        'make',
        'model',
        'year',
        'license_plate',
    ];

    public function driver()
    {
        return $this->belongsTo(Drivers::class, 'driver_id');
    }
}

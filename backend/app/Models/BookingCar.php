<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingCar extends Model
{
    use HasFactory;
protected $table = 'bookingCars';
    protected $fillable = [
        'name',
        'from',
        'to',
        'date',
        'time',
        'car',
        'email',
        'passengers',
        'message',
    ];


}

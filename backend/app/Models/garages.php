<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garages extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'location_id',
        'capacity',
    ];

    public function location()
    {
        return $this->belongsTo(Locations::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'room_number',
        'type',
        'price',
        'status',
        'image',
        'rating',
    ];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}

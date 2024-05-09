<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ferry()
    {
        return $this->hasOne(Ferry::class, 'id', 'ferryID');
    }

    public function books()
    {
        return $this->belongsTo(Booking::class);
    }
}

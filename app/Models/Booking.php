<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function receipt()
    {
        return $this->hasOne(Receipt::class, 'id', 'receiptID');
    }
}

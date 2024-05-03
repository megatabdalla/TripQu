<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Ferry()
    {
        return $this->belongsTo(Ferry::class, 'id', 'FerryID');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'id', 'userID');
    }
}

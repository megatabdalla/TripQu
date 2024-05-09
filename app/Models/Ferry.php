<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ferry extends Model
{
    use HasFactory,Searchable;

    protected $guarded = ['id'];

    // public function scopeFilter($query)
    // {
    //     if (request('cari'))
    //     {
    //         return $query -> where('date', 'like', '%' . request('cari') . '%');
    //     }
    // }

    public function receipt()
    {
        return $this->belongsTo(Receipt::class, 'ferryID', 'id');
    }
}

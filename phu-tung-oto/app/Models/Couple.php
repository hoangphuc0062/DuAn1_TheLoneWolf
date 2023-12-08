<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couple extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name_couple',
        'description',
        'date_start',
        'date_end',
        'created_at',
        'updated_at'
    ];

    function couple_product()
    {
        return $this->hasMany(Couple_product::class);
    }
}

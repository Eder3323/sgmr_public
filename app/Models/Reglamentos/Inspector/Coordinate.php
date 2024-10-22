<?php

namespace App\Models\Reglamentos\Inspector;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'latitude',
        'longitude',
        'status',
    ];
}

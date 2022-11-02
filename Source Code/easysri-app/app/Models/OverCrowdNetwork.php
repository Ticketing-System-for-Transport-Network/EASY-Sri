<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverCrowdNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'arr',
        'dep',
        'o_date',
    ];

}

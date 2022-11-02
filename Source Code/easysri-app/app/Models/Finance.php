<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'f_date',
        'arr',
        'dep',
        'charge',
        'no_of_pass'
    ];

}

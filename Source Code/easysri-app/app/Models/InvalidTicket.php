<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvalidTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_no',
        'c_name',
        'route_id',
        'arr',
        'i_date',
    ];

}

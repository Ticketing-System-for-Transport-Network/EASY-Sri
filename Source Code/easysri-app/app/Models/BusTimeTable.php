<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusTimeTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'dep',
        'dep_time',
        'arr',
        'arr_time',
        'dis',
        'dis_time',
        'bus_t',
        'ser_t',
        'no_bus',
        'charge',
        'done'
    ];

    public function allActive()
    {
        return $this->where('done', 1)->get();
    }

}

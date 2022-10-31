<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userpayment extends Model
{
    use HasFactory;
    protected $table = 'userpayments';
    protected $primaryKey = 'purchase_id';
    protected $fillable = ['owner','cardnumber','amount'];
}

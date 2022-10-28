<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRegTopup extends Model
{
    use HasFactory;
    protected $table = 'user_reg_topups';
    protected $primaryKey = 'userregid';
    protected $fillable = ['Easysrino','Fname','Lname','NIC', 'Address', 'City','Zipcode','MobNo','Initalpay'];
}

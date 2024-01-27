<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use App\Customer;
use App\Unit;

class Customer extends Model
{
    
    protected $fillable = [
        'title', 'address'
    ];


}

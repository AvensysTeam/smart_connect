<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aven extends Model
{
    
    protected $fillable = [
        'customer_id', 'unit_id', 'serial_number', 'project','user_id'
    ];
}

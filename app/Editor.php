<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    protected $fillable = [
        'level1_id', 'level2_id', 'language_code'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengabdian extends Model
{
   protected $fillable = [
        'nim', 'start_from', 'end_on',
    ];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
     protected $table = 'flightinfo';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

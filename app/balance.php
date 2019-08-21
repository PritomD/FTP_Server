<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class balance extends Model
{
   	protected $table = 'balance';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

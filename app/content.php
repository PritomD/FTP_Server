<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'content';
    protected $primaryKey = 'id';
    public $timestamps = false;
}

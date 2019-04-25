<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestedbook extends Model
{
    protected $table = 'requestedbooks';
    public $primarykey = 'id';
    public $timestamps = true;
}
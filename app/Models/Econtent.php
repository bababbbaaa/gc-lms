<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Econtent extends Model
{
    protected $table = 'e_contents';
    public $timestamps = true;
    protected $guarded = ['id'];
}

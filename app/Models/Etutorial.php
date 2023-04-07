<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etutorial extends Model
{
    protected $table = 'e_tutorials';
    public $timestamps = true;
    protected $guarded = ['id'];
}

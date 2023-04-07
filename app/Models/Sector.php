<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectors';
    public $timestamps = true;
    protected $guarded = ['id'];
}

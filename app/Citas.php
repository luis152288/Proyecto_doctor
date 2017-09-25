<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = "citas";
    protected $fillable = [ 'fecha','nombre','edad', 'especialidad'];
}

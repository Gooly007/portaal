<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bureaus extends Model
{
    //
    protected $table = 'bureaus';
    protected $fillable = ['name', 'description', 'username'];
}

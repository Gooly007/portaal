<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'users';
    protected $fillable = [
        'sedula','username','lastname','maidename','firstname','gender','birthday','birthplace','nationality','address',
        'maritalstatus','tel_home','tel_mobile','email_internal','email_private','driverslicense','total_kids','role','status','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

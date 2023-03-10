<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['firstname','lastname' , 'email' , 'phone'];
    protected $table = 'employees';
    public $timestamps = true;

}

<?php

namespace journal\app\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Student extends Eloquent
{

    public $name;
    public $birthday;

    protected $fillable = ['name','birthday','deleted_at'];


}
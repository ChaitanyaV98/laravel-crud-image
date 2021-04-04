<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    #use HasFactory;
    protected $table= 'employees';//mentioning table name in db
    protected $fillable= ['name', 'email', 'post', 'image'];//insering data in table
}

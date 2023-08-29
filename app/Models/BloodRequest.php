<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    use HasFactory;

    protected $table ="bloodrequest";
    protected $anyble =['name','cname','number','state','city','dob','blood_group','gender','unit','status'];
}

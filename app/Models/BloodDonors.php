<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonors extends Model
{
    use HasFactory;

    protected $table ="blooddonors";
    protected $anyble =['name','number','city','state','blood_group','gender','ldb','unit','status','image'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campes extends Model
{
    use HasFactory;

    protected $table ='campes';
    protected $fillable = ['name','organised_by','location','number','status'];
}

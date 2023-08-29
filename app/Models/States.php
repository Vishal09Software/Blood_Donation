<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $table ='all_states';
    protected $fillable = ['state_code','state_name','Country_code'];
}

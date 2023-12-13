<?php

namespace App\Models;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logins extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'password',
    ];
   
}

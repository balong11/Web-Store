<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    function getImageUrl() 
    {
        return 'http://localhost/blogs/public/1/1';
    }
}

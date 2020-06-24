<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class URLShort extends Model
{
    protected $table = 'url_short';
    protected $fillable =[
        'url', 'short'
    ];
}

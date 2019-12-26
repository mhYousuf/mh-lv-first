<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'icon',
        'title',
        'description',
        'status',
    ];
}

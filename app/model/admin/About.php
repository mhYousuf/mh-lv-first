<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $table = 'about';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'date_of_birth',
        'address',
        'nationality',
        'image',
        'description',
        'socail_link',
        'status',
    ];
}

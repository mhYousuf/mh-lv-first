<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
	protected $table = 'basic';

    protected $fillable = [
        'title',
        'website_name',
        'phone', 
        'email', 
        'logo', 
        'footer_logo', 
        'address',
        'web_name',
        'copy_name',
        'copy_link',
        'copy_year',
        'footer_description',
        'status', 
    ];
}

<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonial';
    
    protected $fillable = [
    	'name',
    	'title',
    	'image',
    	'description',
    	'status',
    ];
}

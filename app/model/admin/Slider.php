<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	protected $table  = 'slider';
	
    protected $fillable = 
    [
    	'title',
    	'sub_title',
    	'heading',
    	'image',
    	'status',
    	'created_by',
    	'updated_by',
    ];
}

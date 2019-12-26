<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'category';
	
    protected $fillable = 
    [
    	'name',
    	'status',
    	'created_by',
    	'updated_by',
    ];
}

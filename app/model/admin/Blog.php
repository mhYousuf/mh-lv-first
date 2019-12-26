<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blog';

    protected $fillable = [ 
    	'name',
    	'title',
    	'icon',
    	'heading',
    	'image',
    	'description',
    	'date',
    	'status',
    ];
}

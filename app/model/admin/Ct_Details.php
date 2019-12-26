<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Ct_Details extends Model
{
    protected $table = 'ct_details';

    protected $fillable = 
    [
    	'category_id',
    	'icon',
    	'name',
    	'title',
    	'release_date',
    	'url',
    	'date',
    	'image',
    	'skill',
    	'pt_name',
    	'pt_image',
    	'pt_description',
    	'description',
    	'status',
    	'created_by',
    	'updated_by',
    ];

    public function category()
    {
        return $this->belongsTo('App\model\admin\Category', 'category_id');
    }
}

<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';

    protected $fillable = [
        'heading',
        'title',
        'skill',
        'skill_name',
        'description',
        'lg_title',
        'lg_skill',
        'lg_skill_name',
        'lg_description',
        'status',
    ];
}

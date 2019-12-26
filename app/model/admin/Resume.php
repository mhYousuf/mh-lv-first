<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resume';

    protected $fillable = [
        'icon',
        'ex_name',
        'ex_title',
        'ex_date',
        'ex_description',
        'ed_icon',
        'ed_name',
        'ed_title',
        'ed_date',
        'ed_description',
        'status',
    ];
}

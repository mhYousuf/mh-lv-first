<?php

namespace App\Http\Controllers\admin\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeshboardCn extends Controller
{
    public function index()
    {
    	return view('admin.deshboard');
    }
}

<?php

namespace App\Http\Controllers\web\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	return view('web.pages.blog.blog');
    }
}

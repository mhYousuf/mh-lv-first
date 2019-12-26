<?php

namespace App\Http\Controllers\web\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Basic;
use App\model\admin\Slider;
use App\model\admin\About;
class WebCn extends Controller
{
    public function index()
    {
    	// $data('content') = 'web.pages.about.about';
    	session()->put('basic', Basic::find(1));
    	$data['slider']         = Slider::where(['status' => 1])->orderBy('id', 'desc')->first();
    	$data['about']         = About::where(['status' => 1])->orderBy('id', 'desc')->first();
    	return view('web.pages.home.home', $data);
    }
}

<?php

namespace App\Http\Controllers\web\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Basic;
use App\model\admin\Social;
use App\model\admin\Slider;
use App\model\admin\About;
use App\model\admin\Service;
use App\model\admin\Category;
use App\model\admin\Ct_Details;
use App\model\admin\Blog;
use App\model\admin\Testimonial;
use App\model\admin\Skill;
use App\model\admin\Resume;
use Mail;
class WebCn extends Controller
{
    function __construct()
    {
        $data['social'] = Social::where(['status' => 1])->get();
        // session()->get('basic')->$id, Basic::find(1));
        $data['basic']          = Basic::where(['status' => 1])->orderBy('id', 'desc')->first();

        view()->share($data);
    }

    public function index()
    {
    	// $data('content') = 'web.pages.about.about';
    	// session()->put('basic', Basic::find(1));
        // $data['basic']          = Basic::where(['status' => 1])->orderBy('id', 'desc')->first();
    	$data['slider']         = Slider::where(['status' => 1])->orderBy('id', 'desc')->first();
    	$data['about']          = About::where(['status' => 1])->orderBy('id', 'desc')->first();
    	$data['skill']          = Skill::where(['status' => 1])->orderBy('id', 'desc')->first();
    	$data['service']        = Service::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	$data['category']       = Category::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	$data['details']        = Ct_Details::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	$data['blog']           = Blog::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	$data['testimonial']    = Testimonial::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	$data['skills']         = Skill::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	$data['resume']         = Resume::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
    	
    	return view('web.pages.home.home', $data);
    }

    public function blogdetails()
    {
        // echo"blog details";
        $data['blog']              = Blog::where(['status' => 1])->orderBy('id', 'desc')->first();
        $data['blog_dt']           = Blog::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();

        return view('web/pages/blog/single_blog', $data);
    }

    public function portfolio()
    {
        $data['protfolio']           = Ct_Details::where(['status' => 1])->orderBy('id', 'desc')->take(4)->get();
        $data['prot']                = Ct_Details::where(['status' => 1])->orderBy('id', 'desc')->first();
        return view('web.pages.portfolio.portfolio', $data);
    }

    public function sentmail(Request $request)
    {
      $basic   = Basic::find(1); 
      $name    = $request->name;
      $email   = $request->email;
      $phone   = $request->phone;
      $message = "<b>Name: $name <br>Email : $email </b><br>phone : $phone<br>".$request->message;

      $send = Mail::send([], [], function ($mail) use ($basic, $name, $email, $phone, $message) {
          $mail->to($basic->email, 'Mithu')
              ->subject('Contact')
              ->setBody($message, 'text/html');
      });

      return redirect()->back();
    }
}

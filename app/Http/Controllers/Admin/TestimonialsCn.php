<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Testimonial;
use Image;

class TestimonialsCn extends Controller
{
    public function index()
    {
    	$data['testimonial']  = Testimonial::orderBy('id', 'desc')->get();
    	return view('admin.pages.testimonials.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	if ($request->type == 'save') 
    	{
    		$data['action']  = 'save';
    	}else
    	{
    		$data['action']  = 'edit';
    		$data['value']   = Testimonial::find($request->id);
    	}
    	return view('admin.pages.testimonials.create', $data);
    }

    public function store(Request $request)
    {
    	$id = $request->id;
    	$data['name']  	= $request->name;
    	$data['title']  	= $request->title;
    	$data['description']  	= $request->description;
    	$data['status']  	= $request->status;

    	$files = ['image'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'back_end/upload/testimonial/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Testimonial::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
             		}

            }
        }

        if (!$id) 
        {
        	$data['created-at']  = date('Y-m-d H:i:s');
        	$save  				= Testimonial::create($data);
            session()->flash('insert', 'data insert success...');

        }else
        {
        	$data['updated_at'] = date('Y-m-d H:i:s');
        	$update    			= Testimonial::whereId($id)->update($data);
            session()->flash('update', 'data update success...');
        }

        session()->put('testimonial', Testimonial::find(1));
        return redirect('deshboard/testimonials');
    }

    public function destroy($id)
    {
    	$test_img = array('image');
    	$old_data = Testimonial::find($id);
    	foreach ($test_img as $key => $img) {
    		$path = 'back_end/upload/testimonial/';
	        if($old_data->$img && file_exists($path.$old_data->$img)) { unlink($path.$old_data->$img); }
    	}
    	$old_data->delete();
    	return redirect()->back();
    }
}

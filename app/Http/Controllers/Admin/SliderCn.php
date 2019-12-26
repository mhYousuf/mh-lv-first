<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Slider;
use Image;

class SliderCn extends Controller
{
    public function index()
    {
    	$data['slider']		=	Slider::orderBy('id', 'desc')->get();
    	return view('admin.pages.slider.index', $data);
    }

    public function create(Request $request, $id = '')
    {
    	if ($request->type == 'save') 
    	{
    		$data['action']  = 'save';
    	}else
    	{
    		$data['action']  = 'edit';
    		$data['value']   = Slider::find($request->id); 
    	}
    	return view('admin.pages.slider.create', $data);
    }

    public function store(Request $request)
    {
    	$id 			= $request->id;
    	$data['title']  = $request->title;
    	$data['sub_title']  = $request->sub_title;
    	$data['heading']  = $request->heading;
    	$data['status']  = $request->status;


    	$files = ['image'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'back_end/upload/slider/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Slider::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
             		}

            }
        }

        if (!$id) 
        {
        	$data['created-at']  = date('Y-m-d H:i:s');
        	$save  				= Slider::create($data);
            session()->flash('insert', 'data insert success...');
        }else
        {
        	$data['updated_at'] = date('Y-m-d H:i:s');
        	$update    			= Slider::whereId($id)->update($data);
            session()->flash('update', 'data update success...');
        }

        session()->put('slider', Slider::find(1));
        return redirect('deshboard/slider');
    }

    public function destroy(Request $request, $id)
    {
    	$slider_img  =array('image');
    	$old_data  = Slider::find($id);
    	foreach ($slider_img as $key => $img) {
    		$path  = 'back_end/upload/slider/';
    		if ($old_data->$img  && file_exists($path.$old_data->$img)) { unlink($path.$old_data->$img); }
    	}
    	$old_data->delete();
    	return redirect()->back();
    }
}

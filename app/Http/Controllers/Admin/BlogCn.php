<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Blog;
use Image;
class BlogCn extends Controller
{
    public function index()
    {
    	$data['blog']  	=	Blog::orderBy('id', 'desc')->get();
    	return view('admin.pages.blog.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	if ($request->type == 'save') {
    		$data['action']  = 'save';
    	}else
    	{
    		$data['action']  = 'edit';
    		$data['value']   = Blog::find($request->id);
    	}
    	return view('admin.pages.blog.create', $data);
    }

    public function store(Request $request)
    {
    	$id    = $request->id;
    	$data['name'] 	=	$request->name;
    	$data['title'] 	=	$request->title;
    	$data['icon'] 	=	$request->icon;
    	$data['heading'] 	=	$request->heading;
    	$data['description'] 	=	$request->description;
    	$data['date'] 	=	$request->date;
    	$data['status'] 	=	$request->status;

    	$files = ['image'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'back_end/upload/blog/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Blog::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
             		}

            }
        }

        if (!$id) 
        {
        	$data['created-at']  = date('Y-m-d H:i:s');
        	$save  				= Blog::create($data);
            session()->flash('insert', 'data insert success...');
        }else
        {
        	$data['updated_at'] = date('Y-m-d H:i:s');
        	$update    			= Blog::whereId($id)->update($data);
            session()->flash('update', 'data insert success...');

        }

        session()->put('blog', Blog::find(1));
        return redirect('deshboard/blog');
    }

    public function destroy($id)
    {
	    $blog_img = array('image');
	   	$old_data = Blog::find($id);
	   	foreach ($blog_img as $key => $img) {
	   		$path = 'back_end/upload/blog/';
	   		if($old_data->$img && file_exists($path.$old_data->$img)) { unlink($path.$old_data->$img); }
	   	}
	        $old_data->delete();
	        return redirect()->back();
	    }
}

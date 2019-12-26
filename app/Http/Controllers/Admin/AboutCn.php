<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\About;
use Image;
class AboutCn extends Controller
{
    public function index()
    {
    	$data['about'] = About::orderBy('id', 'desc')->get();
    	return view('admin.pages.about.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	if ($request->type =='save' ) {
    		$data['action'] = 'save';
    	}else
    	{
    		$data['action'] = 'edit';
    		$data['value']      = About::find($request->id);
    	}
    	return view('admin.pages.about.create', $data);
    }

    public function store(Request $request)
    {
    	$id = $request->id;
    	$data['name']	=	$request->name;
    	$data['phone']	=	$request->phone;
    	$data['email']	=	$request->email;
    	$data['date_of_birth']	=	$request->date_of_birth;
    	$data['address']	=	$request->address;
    	$data['nationality']	=	$request->nationality;
    	$data['description']	=	$request->description;
    	$data['socail_link']	=	$request->socail_link;
    	$data['status']	=	$request->status;

    	$files = ['image'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'back_end/upload/about/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = About::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
	                 // $file->move('About', ['id' => $id], $path, [$file]);
             		}

            }
        }

        if (!$id)
        {
        	$data['created_at']     = date('Y-m-d H:i:s');
            $save                   = About::create($data);
            session()->flash('insert', 'Success');
        }else
        {
        	$data['updated_at']     = date('Y-m-d H:i:s');
            $update                 = About::whereId($id)->update($data);
            session()->flash('update', 'Success');
        }
        session()->put('about', About::find(1));
        return redirect('deshboard/about');

    }

    public function destroy($id)
    {
   	$about_img = array('image');
   	$old_data = About::find($id);
   	foreach ($about_img as $key => $img) {
   		$path = 'back_end/upload/about/';
   		if($old_data->$img && file_exists($path.$old_data->$img)) { unlink($path.$old_data->$img); }
   	}
        $old_data->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Category;
use App\model\admin\Ct_Details;
use Image;

class Ct_DetailsCn extends Controller
{
    public function index()
    {
    	$data['details'] 	=	Ct_Details::with('category')->orderBy('id', 'desc')->get();
    	return view('admin.pages.portfolio.details.index', $data);
    }

    public function create(Request $request, $id = '')
    {
    	if ($request->type == 'save') 
    	{
    		$data['action']  = 'save';
    	}else
    	{
    		$data['action']  = 'edit';
    		$data['value']  = Ct_Details::find($request->id);
    	}
    	$data['category'] = Category::where(['status' => 1])->get();
    	return view('admin.pages.portfolio.details.create', $data);
    }

    public function store(Request $request)
    {
    	$id 		=	$request->id;
    	$data['category_id']		=	$request->category_id;
    	$data['icon']		=	$request->icon;
    	$data['name']		=	$request->name;
    	$data['title']		=	$request->title;
    	$data['release_date']		=	$request->release_date;
    	$data['url']		=	$request->url;
    	$data['date']		=	$request->date;
    	$data['skill']		=	$request->skill;
    	$data['pt_name']		=	$request->pt_name;
    	$data['pt_description']		=	$request->pt_description;
    	$data['description']		=	$request->description;
    	$data['status']		=	$request->status;
    	// $data['created_by']		=	$request->created_by;
    	// $data['updated_by']		=	$request->updated_by;

    	$files = ['image', 'pt_image'];
        foreach ($files as $key => $file)
        {
            if($request->hasFile($file))
            {
                $doc = $request->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'back_end/upload/details/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Ct_Details::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
             		}

            }
        }

        if (!$id) 
        {
        	$data['create_at'] 	= date('Y-m-d H:i:s');
        	$save 				= Ct_Details::create($data);
        	session()->flash('insert', 'data insert success....');
        }else
        {
        	$data['updated_at'] 		= date('Y-m-d H:i:s');
        	$update 					= Ct_Details::whereId($id)->update($data);
        	session()->flash('update', 'data update success....');

        }

        session()->put('ct_details', Ct_Details::find(1));
        return redirect('deshboard/details');
    }


    public function destroy(Request $request, $id)
    {
        $old_data = Ct_Details::find($id);
        $details_img = array('image', 'pt_image');
        foreach ($details_img as $key => $img) {
            $path = 'back_end/upload/details/';
            if($old_data->$img && file_exists($path.$old_data->$img)) { unlink($path.$old_data->$img); }
        }

        $old_data->delete();
        return redirect()->back();
    }
}

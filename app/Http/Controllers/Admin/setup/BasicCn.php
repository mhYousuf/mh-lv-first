<?php

namespace App\Http\Controllers\admin\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Basic;
use Image;
class BasicCn extends Controller
{
   public function index()
   {
        $data['basic']  = Basic::orderBy('id', 'desc')->get();
   		return view('admin.pages.setup.basic.list', $data);
   }

   public function form(Request $req, $id= '')
   {
   	// dd($req->all());
   	 if ($req->type == 'save'){
            $data['action']     = 'save';
        } else {
            $data['action']     = 'edit';
            $data['value']      = Basic::find($req->id);
            

        }
   	return view('admin.pages.setup.basic.form', $data);
   }
   public function save(Request $req)
   {
   	// dd($req->all());
   	// $basic = new Basic;
   	$id =$req->id;
   	$data['title'] =$req->title;
   	$data['website_name'] =$req->website_name;
   	$data['email'] =$req->email;
   	$data['phone'] =$req->phone;
    $data['address']        =   $req->address;
    $data['web_name']       =   $req->web_name;
    $data['copy_name']      =   $req->copy_name;
    $data['copy_link']      =   $req->copy_link;
    $data['copy_year']      =   $req->copy_year;
    $data['footer_description']         =   $req->footer_description;
   	// $data->logo =$req->file('logo');
   	// $data->footer_logo =$req->file('footer_logo');
   	$data['status'] =$req->status;
   	$files = ['logo', 'footer_logo'];
        foreach ($files as $key => $file)
        {
            if($req->hasFile($file))
            {
                $doc = $req->file($file);
                $name = time()+($key+1).'.'.$doc->getClientOriginalExtension();
                $path = 'back_end/upload/basic/';
                Image::make($doc)->save($path.$name);
                $data[$file] = $name;
                if($id)
                	{
	                	$old_data = Basic::find($id);
	            		if($old_data->$file && file_exists($path.$old_data->$file)) { unlink($path.$old_data->$file); }
	                 // $file->move('basic', ['id' => $id], $path, [$file]);
             		}

            }
        }

        if(!$id)
        {
            $data['created_at']     = date('Y-m-d H:i:s');
            $save                   = Basic::create($data);
            session()->flash('insert', 'Success');
        } else {
            $data['updated_at']     = date('Y-m-d H:i:s');
            $update                 = Basic::whereId($id)->update($data);
            session()->flash('update', 'Success');
            
        }
        
        session()->put('basic', Basic::find(1));
        return redirect('deshboard/basic');
   	
   	 // return response()->json($basic);

   }
   public function destroy($id)
   {
   	$basic_img = array('logo', 'footer_logo');
   	$old_data = Basic::find($id);
   	foreach ($basic_img as $key => $img) {
   		$path = 'back_end/upload/basic/';
   		if($old_data->$img && file_exists($path.$old_data->$img)) { unlink($path.$old_data->$img); }
   	}
        $old_data->delete();
        return redirect()->back();
   }
}


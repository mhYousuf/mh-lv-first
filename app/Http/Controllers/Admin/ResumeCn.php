<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Resume;

class ResumeCn extends Controller
{
   public function index()
   {
   	$data['resume']  = Resume::OrderBy('id', 'desc')->get();
   	return view('admin.pages.resume.index', $data);
   }

   public function form(Request $request, $id='')
   {
   	if ($request->type == 'save') 
   	{
   		$data['action']  = 'save';
   	}else
   	{
   		$data['action']  = 'edit';
   		$data['value']      = Resume::find($request->id);
   	}
   	return view('admin.pages.resume.create', $data);
   }

   public function store(Request $request)
   {
   	$id 		= $request->id;
   	$data['icon'] 		=	$request->icon;
   	$data['ex_name'] 	=	$request->ex_name;
   	$data['ex_title'] 	=	$request->ex_title;
   	$data['ex_date'] 	=	$request->ex_date;
   	$data['ex_description'] 	=	$request->ex_description;
   	$data['ed_icon'] 	=	$request->ed_icon;
   	$data['ed_name'] 	=	$request->ed_name;
   	$data['ed_title'] 	=	$request->ed_title;
   	$data['ed_date'] 	=	$request->ed_date;
   	$data['ed_description'] 	=	$request->ed_description;
   	$data['status'] 	=	$request->status;


   	if (!$id) 
   	{
   		$data['created_at']  = date('Y-m-d H:i:s');
   		$save 			= Resume::create($data);
         session()->flash('insert', 'insert data successe');
   	}else
   	{
   		$data['updated_at']  = date('Y-m-d H:i:s');
   		$update   			 = Resume::whereId($id)->update($data);
         session()->flash('update', 'update data successe');

   	}

   	session()->put('resume', Resume::find(1));
   	return redirect()->route('admin.resume');

   }

   public function destroy($id)
   {
   	$old_data = Resume::find($id);
   	$old_data->delete();
   	return redirect()->back();
   }
}

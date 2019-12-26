<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Service;

class ServiceCn extends Controller
{
   public function index()
   {
   	$data['service'] = Service::orderBy('id', 'desc')->get();
   	return view('admin.pages.service.index', $data);
   }

   public function form(Request $request, $id = '')
   {
   	if ($request->type == 'save') {
   		$data['action']  =	'save';
   	}else
   	{
   		$data['action']  = 'edit';
   		$data['value'] 		 = Service::find($request->id);
   	}
   	return view('admin.pages.service.create', $data);
   }

   public function store(Request $request)
   {
   	$id 	= $request->id;
   	$data['icon'] 	= $request->icon;
   	$data['title'] 	= $request->title;
   	$data['description'] 	= $request->description;
   	$data['status'] 	= $request->status;


   	if (!$id)
   	{
   		$data['created_at'] = date('Y-m-d H:i:s');
   		$save				= Service::create($data);
        session()->flash('insert', 'Success');

   	}else
   	{
   		$data['updated_at'] = date('Y-m-d H:i:s');
   		$update 			= Service::whereId($id)->update($data);
        session()->flash('update', 'Success');

   	}
   		session()->put('service', Service::find(1));
        return redirect('deshboard/srervice');
   }


   public function destroy($id)
   {
   	$old_data = Service::find($id);
   	$old_data->delete();
   	return redirect()->back();
   }
}

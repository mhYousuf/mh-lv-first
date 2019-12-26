<?php

namespace App\Http\Controllers\admin\setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Social;

class SocialCn extends Controller
{
    public function index()
    {
    	$data['social'] 	= Social::orderBy('id', 'desc')->get();	
    	return view('admin.pages.setup.social.index', $data);
    }

    public function create(Request $request, $id = '')
    {
    	if ($request->type == 'save') 
    	{
    		$data['action'] = 'save';
    	}else
    	{
    		$data['action']  = 'edit';
    		$data['value']   = Social::find($request->id);
    	}
    	return view('admin.pages.setup.social.create', $data);
    }

    public function store(Request $request)
    {
    	$id = $request->id;
    	$data['icon'] 	= strip_tags($request->icon);
    	$data['url'] 	= strip_tags($request->url);
    	$data['status'] 	= strip_tags($request->status);

    	if (!$id) 
    	{
    		$data['created_at']  = date('Y-m-d H:i:s');
    		$save 				= Social::create($data);
            session()->flash('insert', 'data insert success...');

    	}else
    	{
    		$data['updated_at']  =	date('Y-m-d H:i:s');
    		$update  			= Social::whereId($id)->update($data);
            session()->flash('update', 'data update success...');

    	}

    	session()->put('social', Social::find(1));
    	return redirect('deshboard/social');
    }

    public function destroy(Request $request, $id)
    {
    	$update = Social::whereId($request->id);
        
        $delete = Social::destroy($request->id);

        return redirect()->back();
    }
}

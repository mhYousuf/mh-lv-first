<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Category;

class CategoryCn extends Controller
{
	public function index()
	{
		$data['category']  = Category::orderBy('id', 'desc')->get();
		return view('admin.pages.portfolio.category.index', $data);
	}

	public function create(Request $request, $id = '')
	{
		if ($request->type == 'save') 
		{
			$data['action'] 	=	'save';
		}else
		{
			$data['action'] 	=	'edit';
			$data['value'] 		=	Category::find($request->id);
		}
		return view('admin.pages.portfolio.category.create', $data);
	}

	public function store(Request $request)
	{
		$id 		= $request->id;
		$data['name'] 		= $request->name;
		$data['status'] 	= $request->status;

		if (!$id) 
		{
			$data['created_at'] 	= date('Y-m-d H:i:s');
			$save 					= Category::create($data);
			session()->flash('insert', 'data insert success...');

		}else
		{
			$data['updated_at'] 	= date('Y-m-d h:i:s');
			$update 				= Category::whereId($id)->update($data);
			session()->flash('update', 'data update success...');

		}

		session()->put('category', Category::find(1));
		return redirect('deshboard/category');
	}

	public function destroy(Request $request, $id)
	{
		$data  		= Category::whereId($request->id);
		$delete 	= Category::destroy($request->id);

		return redirect()->back();
	}
}

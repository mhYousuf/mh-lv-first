<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\Skill;

class SkillCn extends Controller
{
    public function index()
    {
    	$data['skill']   	= Skill::orderBy('id', 'desc')->get();
    	return view('admin.pages.skill.index', $data);
    }

    public function form(Request $request, $id = '')
    {
    	if ($request->type == 'save') {
    		$data['action'] = 'save';
    	}else{
    		$data['action'] 	= 'edit';
    		$data['value']  	= Skill::find($request->id);
    	}
    	return view('admin.pages.skill.create', $data);
    }

    public function store(Request $request)
    {
    	$id 		= $request->id;
    	$data['heading']		=	$request->heading;
    	$data['title']		=	$request->title;
    	$data['skill']		=	$request->skill;
    	$data['skill_name']		=	$request->skill_name;
    	$data['description']		=	$request->description;
    	$data['lg_title']		=	$request->lg_title;
    	$data['lg_skill']		=	$request->lg_skill;
    	$data['lg_skill_name']		=	$request->lg_skill_name;
    	$data['lg_description']		=	$request->lg_description;
    	$data['status']		=	$request->status;

    	if (!$id) 
    	{
    		$data['created_at'] 	= date('Y-m-d H:i:s');
    		$save 					= Skill::create($data);
            session()->flash('insert', 'data insert successe...');
    	}else{
    		$data['updated_at'] 	= date('Y-m-d H:i:s');
    		$update 				= Skill::whereId($id)->update($data);
            session()->flash('update', 'data update successe...');

    	}

    	session()->put('skill', Skill::find(1));
    	return redirect()->route('admin.skill');
    }

    public function destroy($id)
    {
    	$old_data  = Skill::find($id);
    	$old_data->delete();
    	return redirect()->back();
    }
}

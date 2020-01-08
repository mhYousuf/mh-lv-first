<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\model\Auth\Authlogin;

class ChangeCn extends Controller
{
    public function index()
    {
    	return view('admin.auth.change.change_pass');
    }

    public function passwordupdate(Request $request)
    {
    	// dd($request->all());
    	$id 	= auth()->guard('personaladmin')->user()->id;
    	$old_pass = $request->old_pass;
    	$new_pass = Hash::make($request->new_pass);

    	$data = Authlogin::find($id);
    	

    	if (Hash::check($old_pass, $data->password)) {
    		Authlogin::whereId($id)->update(['password' => $new_pass]);
    		session()->flash('change', 'success-message');
    		return '1';
    	}else
    	{
    		return '0';
    	}

    	return redirect()->route('auth.change.index');
    }
}

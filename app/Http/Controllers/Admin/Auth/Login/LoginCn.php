<?php

namespace App\Http\Controllers\Admin\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\model\admin\Basic;
use App\model\Auth\Authlogin;

class LoginCn extends Controller
{
    public function index()
    {
        // session()->put('basic', Basic::find(1));
        if (auth()->guard('personaladmin')->check()) {
            return redirect()->route('admin.deshboard');
        }
    	return view('admin.auth.login');
    }

    public function login(Request $request)
    {
    	
    	// dd($request->all());
    	$username = $request->username;
    	$password = $request->password;
        // $personaladmin = $request->role;
        
    	if (auth()->guard('personaladmin')->attempt(['username' => $username, 'password' => $password, /*'role'=> $personaladmin,*/ 'status'=>1]))
    	 {
            $log['online']      = 1;
            $log['login_at']    = \Carbon\Carbon::now();
            
    		Authlogin::whereId(auth()->guard('personaladmin')->id())->update($log);
            session()->flash('login', 'success...');
    	}else{
            session()->flash('login_fail', 'faild...');
            return redirect()->route('admin.login');

    	}
        return redirect()->route('admin.deshboard');

    }
}

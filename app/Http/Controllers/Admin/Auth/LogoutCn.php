<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Auth\Authlogin;

class LogoutCn extends Controller
{
    public function logout(Request $request)
    {
    	$log['online']          = 0;
        $log['logout_at']       = \Carbon\Carbon::now();
        Authlogin::whereId(auth()->guard('personaladmin')->id())->update($log);
        
        auth()->guard('personaladmin')->logout();
        return redirect()->route('admin.login');
    } 
}

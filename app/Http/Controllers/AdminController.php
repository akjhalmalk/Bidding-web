<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
	public function getLogin()
	{
		return view('admin.login');
	}
     public function getLogout()
	{
		Auth::logout();
		return redirect()->route('index');
	}
     
    public function getDashboard()
    {
    	// if(!Auth::check())
    	// {
    	// 	return redirect()->back();
    	// }
    	$users = User::all();
    	return view('admin.dashboard',['users' => $users]);
    }

	public function postLogin(Request $request)
	{
		$this->validate($request,[
              'name' => 'required',
              'password' => 'required'
			]);

		//we cant compare password from database with  password in the request as it encrypted at database  so we use auth  and it will takecare of it
           //we must tell laravel at config => auth  which table it will auth on
		if(!Auth::attempt(['name' => $request['name'] , 'password' => $request['password']]))
		{
          return redirect()->back()->with(['fail' => 'Could not log you in']);
		}
		return redirect()->route('admin.dashboard');
	}
}
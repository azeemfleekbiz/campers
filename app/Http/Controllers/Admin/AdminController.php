<?php

namespace App\Http\Controllers\Admin;
use DB;
use Auth;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user_role = Auth::user()->role_id;
        if($user_role==1)
        { 
            return view('admin.dashboard',array('page_title'=>'Camper Admin Dashboard'));
         }else
        {      
            Auth::logout();
            return redirect('admin/login');
        }
        
    }
    
    public function changePassword()
    {
        $user_role = Auth::user()->user_role;
        if($user_role==1)
        {
         return view('admin.changepassword')->with('page_title', "Admin Dashboard");
        }else
        {      
            Auth::logout();
            return redirect('admin/login');
        }
    }
    
    public function resetPassword(Request $request)
    {
        $user_id = Auth::user()->id;
        $password  = bcrypt($request->input('password'));
        DB::table('users')
                   ->where('id', $user_id)->update(
                    ['password' => $password]
        );        
        Auth::logout();
        return redirect('admin/login');
    }
    
    public function adminLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
    
    
    
}

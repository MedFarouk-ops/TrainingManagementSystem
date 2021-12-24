<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\User as User;
use App\Permission as Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::with('permissions')->find(auth()->guard('web')->user()->id);
            
        $permission = Permission::all()->where('user_id',$user->id); 

        if($permission[0]->status =="accepted"){

            return view('user.user-dashboard');
        }
        else
        {
            return view('user.user-wait');
        }
    }
    public function profile()
    {
        $user = User::with('permissions')->find(auth()->guard('web')->user()->id);
            
        $permission = Permission::all()->where('user_id',$user->id); 

        if($permission[0]->status =="accepted"){
        $user = auth()->user();
        return view('user.user-profile',compact('user',$user));
    }
         else
        {
            return view('user.user-wait');
        }
    }

    public function table()
    {
        $user = User::with('permissions')->find(auth()->guard('web')->user()->id);
            
        $permission = Permission::all()->where('user_id',$user->id); 

        if($permission[0]->status =="accepted"){
        return view('user.user-table');
    }
     else
        {
            return view('user.user-wait');
        }
    }

    public function show_formation($id)
    {
        $user = User::with('permissions')->find(auth()->guard('web')->user()->id);
            
        $permission = Permission::all()->where('user_id',$user->id); 

        if($permission[0]->status =="accepted"){

        $formation = Formation::find($id) ;
        
        return view('crud-formation.show_to_user' ,compact('formation'));
        }
         else
        {
            return view('user.user-wait');
        }
    }
  
    

}

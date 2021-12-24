<?php

namespace App\Http\Controllers\Admin;

use App\Permission as Permission;
use App\User as User;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEnrollmentRequest;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PermissionsController extends Controller
{


      
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }


    public function index()
    {

        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    
    

    public function edit($id)
    {
        $permission = Permission::find($id) ;

        $user = User::with('permissions')->find($permission->user_id);
    
        $permission->load('user');

        return view('admin.permissions.edit', compact('user','permission'));
    }

     public function update(Request $request ,$id)
    { 
        $data = Permission::find($id) ;
        $data->status =  $request->get('status');
        $data->save();
        return redirect()->route('admin.user.permission')
                        ->with('success','Permission successfully updated');
    }


    public function show_delete($id)
    {

        $permission = Permission::find($id) ;

        $user = User::with('permissions')->find($permission->user_id);
    
        $permission->load('user');

        return view('admin.permissions.delete', compact('user','permission'));
    }

    public function destroy($id)
    {
        $permission = Permission::find($id) ;

        $user = User::find($permission->user_id);
        
        $permission->delete();
       
        $user->delete();

        return redirect()->route('admin.user.permission')
                        ->with('success','Permission successfully deleted');
    }
    

    public function massDestroy(MassDestroyEnrollmentRequest $request)
    {
        Enrollment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

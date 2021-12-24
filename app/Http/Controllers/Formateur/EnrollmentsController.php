<?php

namespace App\Http\Controllers\Formateur;

use App\Formation as Formation;
use App\Enrollment as Enrollment;
use App\User as User;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEnrollmentRequest;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnrollmentsController extends Controller
{


      
    public function __construct()
    {
        $this->middleware('auth:formateur');
        
    }


    public function index()
    {

        $enrollments = Enrollment::all();

        return view('formateur.enrollments.index', compact('enrollments'));
    }

    
    

    public function edit($id)
    {
        $enrollment = Enrollment::find($id) ;

        $formation = Formation::with('enrollments')->find($enrollment->formation_id);

        $user = User::with('enrollments')->find($enrollment->user_id);
    
        $enrollment->load('user', 'formation');

        return view('formateur.enrollments.edit', compact('user', 'formation', 'enrollment'));
    }

     public function update(Request $request ,$id)
    { 
        $data = Enrollment::find($id) ;
        $data->status =  $request->get('status');
        $data->save();
        return redirect()->route('formateur.user.list')
                        ->with('success','Enrollment successfully updated');
    }

    public function show(Enrollment $enrollment)
    {

        $enrollment->load('user', 'formation');

        return view('formateur.enrollments.show', compact('enrollment'));
    }

    public function show_delete($id)
    {

       $enrollment = Enrollment::find($id) ;

        $formation = Formation::with('enrollments')->find($enrollment->formation_id);

        $user = User::with('enrollments')->find($enrollment->user_id);
    
        $enrollment->load('user', 'formation');

        return view('formateur.enrollments.delete', compact('user', 'formation', 'enrollment'));
    }

    public function destroy($id)
    {
        $enrollment = Enrollment::find($id) ;
        $enrollment->delete();
        return redirect()->route('formateur.user.list')
                        ->with('success','Enrollment successfully deleted');
    }
    

    public function massDestroy(MassDestroyEnrollmentRequest $request)
    {
        Enrollment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

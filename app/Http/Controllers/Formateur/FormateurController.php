<?php


namespace App\Http\Controllers\Formateur;

use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Formateur;

class FormateurController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:formateur');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('formateur.formateur-dashboard');
    }
    public function showProfile() {
        return view('formateur.formateur-profile');
    }

    public function showFormationTable() {
        return view('formateur.formateur-formation');
    }
  
    public function edit(Formateur $formateur)
    {   
        return view('formateur.formateur-profile')->with('user', auth()->user());
    }

    public function update(Request $request)
    { 
       /*  $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);*/
        
        $formateur = auth()->user();
        $formateur->first_name =  $request->get('first_name');
        $formateur->last_name = $request->get('last_name');
        $formateur->email = $request->get('email');
        $formateur->job_title = $request->get('job_title');
        $formateur->city = $request->get('city');
        $formateur->country = $request->get('country');
        $formateur->phone = $request->get('phone');
        $formateur->save();

        return redirect()->route('formateur.profile')
                        ->with('success','Formateur updated successfully');
        
    }
    //store the message in the database
    public function store_inbox(Request $request)
    {

      
    }



}


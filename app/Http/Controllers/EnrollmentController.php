<?php

namespace App\Http\Controllers;

use App\Formation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnrollmentController extends Controller
{
    public function create($id)
    {
        $formation = Formation::find($id);

        $breadcrumb = "Enroll in $formation->title Formation";

        return view('enrollment.enroll', compact('formation', 'breadcrumb'));
    }

    public function store(Request $request, $id)
    {
        if(auth()->guest())
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            auth()->login($user);
        }
        $formation = Formation::find($id);
        
        $formation->enrollments()->create(['user_id' => auth()->user()->id]);

        return redirect()->route('enroll.myFormations');
    }

    public function handleLogin($id)
    {
        $formation = Formation::find($id);

        return redirect()->route('enroll.create', $formation->id);
        
    }

    public function myFormations()
    {
        $breadcrumb = "My Formations";

        $userEnrollments = auth()->user()
            ->enrollments()
            ->with('formation')
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('user.user-table', compact(['breadcrumb', 'userEnrollments']));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index_admin()
    {
        return view('admin.admin-inbox');        
    }
    
    public function index_formateur()
    {
            return view('formateur.formateur-inbox');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_inbox_formateur(Request $request)
    {

        $data = request()->validate([
            'subject' => ['required','string'],
            'message' => ['required','string'],
    	]);

        if(auth()->guard('formateur')->check() ){
            
            auth()->guard('formateur')->user()->inboxes()->create([
                'subject' => $data['subject'],
                'message' => $data['message'],
            ]);
            
        
            return redirect()->route('formateur.inbox')
                        ->with('success','Message sent successfully');
        }

    }
    public function store_inbox_admin(Request $request)
    {
        $data = request()->validate([
            'subject' => ['required','string'],
            'message' => ['required','string'],
    	]);

    	if(auth()->guard('admin')->check()){

            auth()->guard('admin')->user()->inboxes()->create([
                'subject' => $data['subject'],
                'message' => $data['message'],
            ]);
            

            return redirect()->route('admin.inbox')
                ->with('success','Message sent successfully');
        }
    }

    public function store_inbox_user(Request $request)
    {
        $data = request()->validate([
            'subject' => ['required','string'],
            'message' => ['required','string'],
    	]);

    	if(auth()->guard('web')->check()){

            auth()->guard('web')->user()->inboxes()->create([
                'subject' => $data['subject'],
                'message' => $data['message'],
            ]);
            

            return redirect()->route('admin.inbox')
                ->with('success','Message sent successfully');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

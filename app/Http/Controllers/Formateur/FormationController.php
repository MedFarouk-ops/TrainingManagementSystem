<?php

namespace App\Http\Controllers\Formateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\SessionGuard;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Formation;

class FormationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:formateur');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud-formation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => ['required','string'],
            'link' => ['required','string'],
    		'description' => ['required','string'],
    		'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'date_debut' => ['required','string'],
            'date_fin' => ['required','string'],
            'duree' => ['required','string'],
            'categorie' => ['required','string'],
            'certified' => ['required','string'],
    	]);
        
       if ($request->hasFile('image')) {
            $imagePath=request('image')->store('uploads/ImageFormation','public');
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img = $img->resize(320, 280, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->save($imagePath); // <-- Key point

            //dd();
            Storage::disk('local')->put('uploads'.'/'.$fileName, $img, 'public');
        }
        

    	auth()->guard('formateur')->user()->formations()->create([
    		'description' => $data['description'],
            'link' => $data['link'],
            'title' => $data['title'],
    		'image' =>$imagePath,
            'date_debut' => $data['date_debut'],
            'date_fin' => $data['date_fin'],
            'duree' => $data['duree'],
            'categorie' => $data['categorie'],
            'certified' => $data['certified'],
    	]);
        

    	return redirect()->route('formateur.formation.table')
                        ->with('success','Formation added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formation = Formation::find($id) ;
        return view('crud-formation.show_to_formateur' ,compact('formation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        $formation = formation::all() ;
        $formation = Formation::find($id) ;
        return view('crud-formation.edit' ,compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
         
        
       
        $data = Formation::find($id) ;

        if ($request->hasFile('image')) {
            $imagePath=request('image')->store('uploads/ImageFormation','public');
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(320, 280, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->save($imagePath); // <-- Key point

            //dd();
            Storage::disk('local')->put('uploads'.'/'.$fileName, $img, 'public');
        }
        
        $data->title =  $request->get('title');
        $data->link = $request->get('link');
        $data->description = $request->get('description');
        $data->image = $imagePath;
        $data->save();

      
        return redirect()->route('formateur.formation.table')
                        ->with('success','Formationis successfully updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Formation::findOrFail($id);
        $data->delete();

  
        return redirect()->route('formateur.formation.table')
                        ->with('success','Formation deleted successfully');
    }
}

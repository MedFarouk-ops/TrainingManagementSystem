<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' =>['required', 'string'],
            'status' =>['required', 'string'],
            'institution' =>['required', 'string'],
             'notes' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request,array $data)
    {
         if ($request->hasFile('image')) {
            $imagePath=request('image')->store('uploads/ImageUser','public');
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img = $img->resize(320, 280, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->save($imagePath); // <-- Key point

            //dd();
            Storage::disk('local')->put('uploads'.'/'.$fileName, $img, 'public');
            $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $imagePath,
            'telephone' =>$data['telephone'],
            'status' =>$data['status'],
            'institution' =>$data['institution'],
            'notes' =>$data['notes'],
            'password' => Hash::make($data['password']),
            'etat' => false,
          ]);
        }
        else{

            $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telephone' =>$data['telephone'],
            'status' =>$data['status'],
            'institution' =>$data['institution'],
            'notes' =>$data['notes'],
            'password' => Hash::make($data['password']),
            'etat' => false,
         ]);
        
        }
        
    
       
        return $user;
    }
}

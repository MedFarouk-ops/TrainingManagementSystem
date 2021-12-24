<?php

namespace App;
use App\formation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Formateur extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'formateur' ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'first_name','last_name','email','city','country','job_title','phone','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function formations() 
    {
        return $this->hasMany('App\Formation');  
    }
    public function inboxes() 
    {
        return $this->hasMany('App\Inbox');  
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $guarded=[];

    
    public function admin(){
    	return $this->belongsTo('App\Admin');
    }
    
    public function user(){
    	return $this->belongsTo('App\User');
    }
    
    public function formateur(){
    	return $this->belongsTo('App\Formateur','formateur_id');
    }
}

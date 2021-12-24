<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $guarded=[];

    public function formateur(){
    	return $this->belongsTo('App\Formateur::class');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'formation_id', 'id');
    }
}

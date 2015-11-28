<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;

class FacultyQualification extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faculty_qualification';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['course', 'institute', 'university'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function faculty(){
    	return $this->belongsTo('App\Faculty','faculty_id');
    }
}

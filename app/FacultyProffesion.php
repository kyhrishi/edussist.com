<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;

class FacultyProffesion extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faculty_proffesional_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['organization', 'organization_type', 'remarks'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function faculty(){
    	return $this->belongsTo('App\Faculty');
    }
}

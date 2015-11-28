<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FacultyProffesion;
use App\FacultyQualification;
class Faculty extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faculty';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname', 'middlename'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function qualifications(){
        return $this->hasMany('App\FacultyQualification','faculty_id');
    }

    public function proffesions(){
        return $this->hasMany('App\FacultyProffesion','faculty_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_course extends Model
{

    protected $table = 'student_course';
    protected $primaryKey = 'id';
    public $timestamps = false;
   protected $fillable=
   [
   'std_id',
   'course_id',
   'stdcourse_date'
 ];
}

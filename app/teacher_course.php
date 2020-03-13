<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_course extends Model
{
    protected $table = 'teacher_course';
    protected $primaryKey = 'id';
    public $timestamps = false;
   protected $fillable=
   [
   'id',
   'teh_id',
   'course_id'
 ];
}

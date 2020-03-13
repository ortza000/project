<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_invite extends Model
{

    protected $table = 'student_invite';
    protected $primaryKey = 'part_id';
    public $timestamps = false;
   protected $fillable=
   [
   'part_id',
   'teh_id',
   'std_id',
   'course_id',
   'part_des',
   'part_date'
 ];

}

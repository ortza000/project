<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

  protected $table = 'course';
   public $timestamps = false;
  protected $fillable=
  [
  'course_id',
  'course_name',
  'course_des'
];


}

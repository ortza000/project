<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

  protected $table = 'course';
  protected $primaryKey = 'course_id';
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable=
  [
  'course_id',
  'course_name',
  'course_des',
  'start',
  'end',
  'color',
  'term',
  'type'
];


}

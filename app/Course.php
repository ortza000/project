<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{

  protected $table = 'subject';
   public $timestamps = false;
  protected $fillable=
  [
  'sub_id',
  'teh_id',
  'sub_name',
  'sub_des',
  'sub_term'
];


}

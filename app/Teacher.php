<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{

  protected $table = 'teacher';
   public $timestamps = false;
  protected $fillable=
  [
  'teh_id',
  'teh_name',
  'teh_phone',
  'teh_qualification',
  'teh_email'
];


}

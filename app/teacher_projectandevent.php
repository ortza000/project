<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class teacher_projectandevent extends Model
{

  protected $table = 'teacher_projectandevent';
   public $timestamps = false;
  protected $fillable=
  [
  'pro_id',
  'teh_id',
];


}

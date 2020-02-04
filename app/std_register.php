<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class std_register extends Model
{

  protected $table = 'student_event_register';
   public $timestamps = false;
  protected $fillable=
  [
  'stdevent_id',
  'pro_id',
  'std_id',
  'stdevent_des',
  'register_date'
];


}

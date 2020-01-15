<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{

  protected $table = 'projectandevent';
   public $timestamps = false;
  protected $fillable=
  [
  'pro_id',
  'pro_name',
  'pro_des'
];


}

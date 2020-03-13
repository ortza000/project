<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{

  protected $table = 'subject';
  protected $primaryKey = 'sub_id';
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

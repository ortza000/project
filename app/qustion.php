<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class qustion extends Model
{

  protected $table = 'qustion';
  protected $primaryKey = 'id';
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable=
  [
  'name_qus',
  'name_des'
];


}

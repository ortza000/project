<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    public $table = "teacher";
    protected $primaryKey = 'teh_id';
    public $incrementing = false;
   public $timestamps = false;

  protected $fillable=
  [
  'teh_id',
  'teh_name',
  'teh_phone',
  'teh_qualification',
  'teh_email'];


}

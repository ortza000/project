<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
  public $table = "student";
    protected $primaryKey = 'std_id';
    public $incrementing = false;
   public $timestamps = false;
  protected $fillable=[
  'std_id',
  'std_name',
  'std_card',
  'std_year',
  'std_phone',
  'std_major',
  'std_status'];


}

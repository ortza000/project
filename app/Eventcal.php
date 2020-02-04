<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventcal extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    public $incrementing = false;
   public $timestamps = false;
   protected $fillable=
   [
   'id',
   'title',
   'start',
   'end'
 ];
}

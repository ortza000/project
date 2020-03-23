<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventfullcalrandar extends Model {
    protected $table = 'eventfullcalrandars';

    public $timestamps = false;
   protected $fillable=
   [
   'id_event',
   'title',
   'start',
   'end'
 ];
}

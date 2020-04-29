<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eventcalendar extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','course_id','pro_id','start','end','color','description','type','term'];


    public function getStartAttribute($value){

        $dataStart = Carbon::createFromFormat( 'Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeStart = Carbon::createFromFormat( 'Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->start = ($timeStart == '00:00:00' ? $dataStart : $value);
    }
    public function getEndAttribute($value){

        $dataStart = Carbon::createFromFormat( 'Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeStart = Carbon::createFromFormat( 'Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->end = ($timeStart == '00:00:00' ? $dataStart : $value);
    }
}

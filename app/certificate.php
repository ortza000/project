<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    protected $table = 'certificate';
    protected $primaryKey = 'cert_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable=
    [
    'cert_id',
    'std_id',
    'course_id'
  ];

}

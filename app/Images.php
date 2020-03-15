<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable=
    [
    'id',
    'pro_id',
    'course_id',
    'img',
    'thumbnail_img'
  ];
}

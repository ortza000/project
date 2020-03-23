<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'id_image';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable=
    [
    'id_image',
    'id',
    'img',
    'thumbnail_img'
  ];
}

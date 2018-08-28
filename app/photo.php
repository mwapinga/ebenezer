<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
         protected $fillable = [
       'photo_tag'
    ];

  protected $uploads = '/images/';
    public function getFileAttribute($photo)
    {
           return $this->uploads . $photo;
    }
}

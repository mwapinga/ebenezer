<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
         protected $fillable = [
        'tags1','tags2','tags3','details','photo_id',
    ];

      public function photo(){
        return $this->belongsTo('App\photo');
    }
}

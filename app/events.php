<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
       protected $fillable = [
        'name','date','details','photo_id',
    ];

      public function photo(){
        return $this->belongsTo('App\photo');
    }
}

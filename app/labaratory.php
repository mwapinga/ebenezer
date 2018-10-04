<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class labaratory extends Model
{
       protected $fillable = [
        'name','photo_id','status',
    ];

      public function photo(){
        return $this->belongsTo('App\photo');
    }
}

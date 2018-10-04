<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
          protected $fillable = [
        'name','surname','post','status','photo_id',
    ];
      public function photo(){
        return $this->belongsTo('App\photo');
    }
}


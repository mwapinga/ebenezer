<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
        protected $fillable = [
        'name','surname','Testimonial','photo_id',
    ];

      public function photo(){
        return $this->belongsTo('App\photo');
    }
}

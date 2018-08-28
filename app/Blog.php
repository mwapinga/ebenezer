<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
       protected $fillable = [
          'header','Body','date','photo_id', 'Publisher'
       ];
       protected $dates = [
         'date'
       ];

      public function photo(){
        return $this->belongsTo('App\photo');
    }

      public function user(){
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
       protected $fillable = [
          'header','Body','status','user_id','photo_id',
       ];
       // protected $dates = [
       //   'date'
       // ];

      public function photo(){
        return $this->belongsTo('App\photo');
    }

      public function user(){
        return $this->belongsTo('App\User');
    }
}

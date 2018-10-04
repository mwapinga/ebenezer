<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beststudents extends Model
{
       protected $fillable = [
        'name', 'surname', 'Reglvl','Natlvl','year','status','photo_id',
    ];

     public function photo(){
        return $this->belongsTo('App\photo');
    }
}

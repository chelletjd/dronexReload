<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
       'ced', 'method', 'shipAd', 'recepAd', 'weight', 'recId',
    ];

    public function category(){
    	return $this->belongsTo(User::class);
    }
}

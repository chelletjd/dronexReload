<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
       'userID', 'method', 'shipAd', 'recepAd', 'weight', 'recId',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}

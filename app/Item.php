<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'type','desc','prize','thumbnail','user_id',
    ];
    public function user(){
        return $this->belongsTo('\App\User');
    }
}

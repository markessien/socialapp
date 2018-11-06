<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id','location'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}

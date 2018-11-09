<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'path', 'type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

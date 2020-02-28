<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //


    protected  $guarded=[];

    public  function user()
    {
        return $this->belongsTo(\Illuminate\Foundation\Auth\User::class);
    }

}

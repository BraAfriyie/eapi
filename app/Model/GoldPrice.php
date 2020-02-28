<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App\User;

class GoldPrice extends Model
{
    //


    protected $table='goldprice';

    //fillable Example
    // protected  $fillable = ['name','email','active'];

    //guarded example
    protected  $guarded=[];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

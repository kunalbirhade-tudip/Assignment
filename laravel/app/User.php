<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="user";

    protected $fillable = [
        'id', 's_name',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = [
      //  'password', 'remember_token',
    //];

public $timestamps=false;

}

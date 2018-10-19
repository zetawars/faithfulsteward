<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
   
    public $timestamps = true;
   
        
    protected $table='User_Role';
    protected $fillable = [
       'RoleId','UserId'];
       protected $hidden = [
        'remember_token'
    ];
}

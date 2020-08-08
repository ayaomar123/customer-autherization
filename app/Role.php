<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name','permissions'];

    public function setPermissionsAttribute($value)
    {
        $this->attributes['permissions'] = json_encode($value);
    }

    public function getPermissionsAttribute($value)
    {
        return $this->attributes['permissions'] = json_decode($value);
    }
    public function users(){
        return $this->belongsToMany(User::class,'roles');
    }

}

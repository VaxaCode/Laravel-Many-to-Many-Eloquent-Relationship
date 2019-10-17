<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the users that belongs to the Role
     */
     public function users()
     {
       return $this->belongsToMany(User::class, 'role_user');
     }
}

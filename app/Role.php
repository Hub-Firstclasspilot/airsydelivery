<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        "name",
        "permissions"
    ];

    public function user()
    {
        return $this->belongsToMany(Role::class, "role_users", "role_id", "user_id");
    }
}

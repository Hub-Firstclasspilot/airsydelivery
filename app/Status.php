<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        "status",
        "location",
        "description"
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, "package_id");
    }
}

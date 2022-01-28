<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use Uuid;

    protected $fillable = [
        "tracking_id",
        "type",
        "weight",
        "sender_name",
        "sender_phone",
        "sender_email",
        "sender_location",
        "receiver_name",
        "receiver_phone",
        "receiver_email",
        "receiver_location"
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->tracking_id = generateTrackingID();
        });
    }

    public function status()
    {
        return $this->hasMany(Status::class, "order_id");
    } 

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}

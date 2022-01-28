<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use Uuid;

    protected $fillable = [
        "amount",
        "reference_id",
        "status",
        "payment_option",
        "date_fulfilled"
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->reference_id = generateTransactionID();
        });
    }

    public function package()
    {
        return $this->belongsTo(Pacckage::class, "package_id");
    }
}

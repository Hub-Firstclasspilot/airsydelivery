<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use Uuid;

    protected $fillable = [
        "reference_id",
        "transaction_reference_id",
        "url"
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->reference_id = generateTransactionID();
        });
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, "trnsaction_id");
    }

}

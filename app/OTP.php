<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Mvdnbrk\EloquentExpirable\Expirable;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class OTP extends Model
{
    use Expirable, Uuid;

    protected $fillable = ['token', 'expires_at', 'user_id'];

    public static function generate(Model $model)
    {
        $token = random_int(1000, 9999);

        self::create([
            'user_id' => $model->id,
            'token' => Hash::make($token),
            'expires_at' => now()->addMinutes(30)
        ]);

        return $token;
    }

    public static function verify($token)
    {
        
        $tokens = self::all();

        foreach($tokens as $dbToken){
            if (Hash::check($token, $dbToken->token)) {
                if(!$dbToken->expired()){
                    return true;
                }
            }
        }

        return false;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class StaffList extends Model
{
    use HasFactory;

    protected $fillable = ['minecraft_username', 'UUID', 'rank', 'Tasks'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($staff) {
            if (!$staff->UUID) {
                $staff->UUID = self::getMinecraftUUID($staff->minecraft_username);
            }
        });

        static::updating(function ($staff) {
            if (!$staff->UUID) {
                $staff->UUID = self::getMinecraftUUID($staff->minecraft_username);
            }
        });
    }

    public static function getMinecraftUUID($username)
    {
        $response = Http::get("https://api.mojang.com/users/profiles/minecraft/{$username}");

        return $response->successful() ? $response->json()['id'] : null;
    }
}

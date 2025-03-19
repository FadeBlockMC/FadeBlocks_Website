<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'role',
        'username',
        'discord',
        'age',
        'gender',
        'country',
        'timezone',
        'languages',
        'availability',
        'punished',
        'motivation',
        'skills',
        'about',
        'strength',
        'weakness',
        'social_links',
        'why_accept',
        'additional_info',
        'can_talk_in_calls',
        'can_record_proof',
        'share_account',
        'read_rules'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

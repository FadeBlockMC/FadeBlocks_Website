<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'username',
        'rule_breaker_username',
        'rules_broken',
        'evidence',
        'additional_info'
    ];
}

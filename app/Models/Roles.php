<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'color',
    'staff_channels',
    'edit_rules',
    'edit_wiki',
    'edit_faq',
    'edit_permissions',
    'edit_staff_channels',
    'edit_roles',
    'edit_users',
    'send_announcements'
];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Staff
        DB::table('Roles')->insert([
            'name' => 'Owner',
            'color' => 'EC123B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Operator',
            'color' => 'EC123B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Sr. Admin',
            'color' => 'EC123B',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Admin',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Sr. Moderator',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Moderator',
            'color' => 'D7D7D7',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Helper',
            'color' => 'D7D7D7',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Trainee',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Sr Builder',
            'color' => 'D7D7D7',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Builder',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // user
        DB::table('Roles')->insert([
            'name' => 'Media',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Fade+',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Radiant',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Celestial',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('Roles')->insert([
            'name' => 'Deity',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('Roles')->insert([
            'name' => 'Member',
            'color' => 'D7D7D7',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
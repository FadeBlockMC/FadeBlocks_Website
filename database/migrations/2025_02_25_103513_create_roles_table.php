<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->char('color', 6);
            $table->boolean('staff_channels')->default(false);
            $table->boolean('send_announcements')->default(false);
            $table->boolean('edit_rules')->default(false);
            $table->boolean('edit_wiki')->default(false);
            $table->boolean('edit_faq')->default(false);
            $table->boolean('edit_permissions')->default(false);
            $table->boolean('edit_staff_channels')->default(false);
            $table->boolean('edit_roles')->default(false);
            $table->boolean('edit_users')->default(false);
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};

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
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('staff_channels')->default(false);
            $table->boolean('edit_rules')->default(false);
            $table->boolean('edit_wiki')->default(false);
            $table->boolean('edit_faq')->default(false);
            $table->boolean('edit_permissions')->default(false);
            $table->boolean('edit_staff_channels')->default(false);
            $table->boolean('edit_roles')->default(false);
            $table->boolean('edit_users')->default(false);
            $table->unsignedInteger('role_id');

            $table->foreign(columns: 'role_id')->references('id')->on('roles')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};

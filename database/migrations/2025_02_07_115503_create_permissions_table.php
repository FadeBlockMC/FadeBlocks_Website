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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('EditRules')->default(false);
            $table->boolean('EditRanks')->default(false);
            $table->boolean('EditWiki')->default(false);
            $table->boolean('MakeAnnouncements')->default(false);
            $table->boolean('EditMember')->default(false);
            $table->boolean('EditMessage')->default(false);
            $table->boolean('PunishMember')->default(false);
            $table->timestamps();
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

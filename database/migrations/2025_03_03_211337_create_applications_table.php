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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('role'); 
            $table->string('username');
            $table->string('discord');
            $table->integer('age');
            $table->string('timezone');
            $table->string('languages');
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('availability')->nullable(); 
            $table->string('punished')->nullable();
            $table->text('Social_Links')->nullable();
            $table->text('motivation')->nullable();
            $table->text('skills')->nullable();
            $table->text('about')->nullable();
            $table->text('strength')->nullable();
            $table->text('weakness')->nullable();
            $table->text('why_accept')->nullable();
            $table->text('additional_info')->nullable();
            $table->boolean('can_talk_in_calls')->default(false)->nullable();
            $table->boolean('can_record_proof')->default(false)->nullable();
            $table->boolean('share_account')->default(false)->nullable();
            $table->boolean('read_rules')->default(false);
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('Staff_Reason')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};

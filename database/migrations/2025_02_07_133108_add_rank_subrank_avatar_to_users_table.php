<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('rank')->nullable()->after('name');
            $table->string('subrank')->nullable()->after('rank');
            $table->string('avatar')->nullable()->after('subrank');  // This will store avatar file path
            $table->string('uuid')->nullable()->after('avatar');

        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['rank', 'subrank', 'avatar']);
        });
    }
    
};

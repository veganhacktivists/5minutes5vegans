<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tweets', function (Blueprint $table) {
            // Posts from before Bluesky are all from X
            $table->string('platform', 16)->default('x')->after('id');
            // Bluesky accounts can have no picture
            $table->string('from_profile_image')->nullable()->change();
            $table->index(['lang', 'platform', 'date']);
        });
    }

    public function down(): void
    {
        // Without a platform these would pass as X posts, and some have no avatar
        DB::table('tweets')->where('platform', '!=', 'x')->delete();

        Schema::table('tweets', function (Blueprint $table) {
            $table->dropIndex(['lang', 'platform', 'date']);
            $table->dropColumn('platform');
            $table->string('from_profile_image')->nullable(false)->change();
        });
    }
};

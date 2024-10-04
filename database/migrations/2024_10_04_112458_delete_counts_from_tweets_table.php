<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->dropColumn('view_count');
            $table->dropColumn('like_count');
            $table->dropColumn('reply_count');
            $table->dropColumn('retweet_count');
            $table->dropColumn('quote_count');
        });
    }

    public function down(): void
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->integer('view_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->integer('reply_count')->default(0);
            $table->integer('retweet_count')->default(0);
            $table->integer('quote_count')->default(0);
        });
    }
};

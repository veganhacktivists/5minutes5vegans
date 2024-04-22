<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('lang');
            $table->dateTime('date');
            $table->string('text', 500);
            $table->json('media')->default('[]');
            $table->string('from_user_name');
            $table->string('from_full_name');
            $table->string('from_profile_image');
            $table->integer('view_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->integer('reply_count')->default(0);
            $table->integer('retweet_count')->default(0);
            $table->integer('quote_count')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};

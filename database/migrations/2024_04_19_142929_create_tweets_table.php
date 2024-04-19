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
            $table->string('from');
            $table->string('text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('reddit', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('submission_id');
            $table->mediumText('title');
            $table->longText('text');
            $table->integer('votes');
            $table->integer('comments');
            $table->string('subreddit');
            $table->string('link');
            // $table->timestamp('updated_at');
            // $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reddit');
    }
}

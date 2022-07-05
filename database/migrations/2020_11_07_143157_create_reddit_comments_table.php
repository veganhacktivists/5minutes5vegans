<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedditCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reddit_comments', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('submission_id');
            $table->string('example_comment_id')->nullable();
            $table->string('topic');
            $table->integer('num_comments');
            $table->longtext('comment_text')->nullable();
            $table->string('comment_link')->nullable();
            $table->integer('votes')->nullable();
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
        Schema::dropIfExists('reddit_comments');
    }
}

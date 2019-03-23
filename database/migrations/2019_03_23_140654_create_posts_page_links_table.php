<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsPageLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_page_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_info');
            $table->string('link_info');
            $table->string('title_youtube');
            $table->string('link_youtube');
            $table->string('title_question');
            $table->string('link_question');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_page_links');
    }
}

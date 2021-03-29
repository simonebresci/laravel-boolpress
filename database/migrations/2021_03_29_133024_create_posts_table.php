<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // Keys
            $table->id();

            // Columns
            $table->string('title',255);
            $table->text('body',2048);

            // Timestamps
            $table->timestamps();

            // Foreign keys
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                  ->references('id')
                  ->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // Keys
            $table->id();
            // Columns
            $table->string('body',2048);
            $table->integer('likes');
            // Timestamps
            $table->timestamps();

            // Foreign keys
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                  ->references('id')
                  ->on('authors');

            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

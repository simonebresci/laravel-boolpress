<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_details', function (Blueprint $table) {
          // keys
          $table->id();

          // Columns
          $table->string('phone',20);
          $table->string('address',255);
          $table->text('avatar',2048);

          // Timestamps
          $table->timestamps();

          // Relations
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
        Schema::dropIfExists('authors_details');
    }
}

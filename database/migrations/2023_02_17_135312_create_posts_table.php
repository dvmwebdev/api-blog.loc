<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('category_id');
      $table->string('title');
      $table->string('description');
      $table->text('content');
      $table->integer('published')->default(0);
      $table->timestamp('date_publication');
      $table->integer('likes');
      $table->integer('dislikes');
      $table->timestamps();

      $table->foreign('category_id')->references('id')->on('categories');
    });
  }

  public function down()
  {
    Schema::dropIfExists('posts');
  }
};

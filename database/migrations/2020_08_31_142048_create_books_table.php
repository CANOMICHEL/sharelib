<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('author1_id')->nullable();
            $table->unsignedInteger('author2_id')->nullable();
            $table->unsignedInteger('author3_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->string('tittle',150);
            $table->string('publishing',50)->nullable();
            $table->string('year',4)->nullable();
            $table->boolean('preview',0)->nullable();
            $table->string('image',128)->nullable();
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('author1_id')->references('id')->on('authors');
            $table->foreign('author2_id')->references('id')->on('authors');
            $table->foreign('author3_id')->references('id')->on('authors');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title');
            $table->string(column: 'blog');
            $table->string(column: 'followers');
            $table->string(column: 'likes');
            $table->string(column: 'reply');
            $table->string(column: 'comments');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'blog_category_idx');
            $table->foreign('category_id', 'blog_category_fk')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};

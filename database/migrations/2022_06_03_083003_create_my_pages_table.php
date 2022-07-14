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
        Schema::create('my_pages', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title');
            $table->string(column: 'link');
            $table->string(column: 'e-mail');
            $table->string(column: 'port');
            $table->string(column: 'IP');
            $table->string(column: 'host');
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
        Schema::dropIfExists('my_pages');
    }
};

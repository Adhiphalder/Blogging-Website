<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('post_caption');
            $table->string('post_desc');
            $table->string('post_img')->nullable();
            // $table->foreign('community_id')->references('community_id')->on('communities')->onDelete('cascade');
            // $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->integer('up_votes')->nullable();
            $table->integer('down_votes')->nullable();
            $table->integer('comments');
            $table->integer('share');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
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
        Schema::create('gallery_videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('video_name')->default('images/gallery/videos/video_name.mp4');
            $table->text('desc');
            $table->string('slug');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_videos');
    }
};

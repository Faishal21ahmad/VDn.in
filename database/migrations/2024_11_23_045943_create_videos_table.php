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
        Schema::create('videos', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->id(); // Primary Key (auto increment)
            $table->string('codevideo');
            $table->string('namevideo');
            $table->unsignedBigInteger('user_id')->constrained(
                table: 'users',
                indexName: 'video_user_id',
            );
            $table->unsignedBigInteger('playlist_id')->nullable()->constrained(
                table: 'playlists',
                indexName: 'video_playlist_id',
            )->onDelete('set null');
            $table->timestamps();
        });
    }
// $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign Key to users
           // $table->foreignId('playlist_id')->constrained('playlists')->onDelete('cascade'); // Foreign Key to playlists
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};

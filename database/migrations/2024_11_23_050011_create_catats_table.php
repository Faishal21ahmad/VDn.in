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
        Schema::create('catats', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->id(); // Primary Key (auto increment)
            $table->float('timevid'); // Waktu catatan
            $table->text('catat'); // Isi catatan
            // $table->foreignId('video_id')->constrained('videos')->onDelete('cascade'); // Foreign Key to videos
            $table->unsignedBigInteger('video_id')->constrained(
                table: 'videos',
                indexName: 'catat_video_id',
            )->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catats');
    }
};

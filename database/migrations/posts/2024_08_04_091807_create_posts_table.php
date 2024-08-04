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
            $table->id();
            $table->uuid();
            $table->unsignedBigInteger('author_id'); // For user who created the post
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('published_at')->nullable(); // Optional published date
            $table->string('title');
            $table->text('content');
            $table->string('slug')->unique();
            $table->string('type'); // To identify the type (e.g., blog, product)
            $table->integer('status')->default(1); // Status (e.g., published, draft)
            $table->integer('view_count')->default(0); // For tracking views
            $table->softDeletes();

            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
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
